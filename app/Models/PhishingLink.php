<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhishingLink extends Model
{
    protected $fillable = [
        'platform', 'token', 'redirect_url', 'shortened_url', 'created_by'
    ];

    public function submissions()
    {
        return $this->hasMany(PhishingSubmission::class);
    }
}

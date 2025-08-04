<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhishingSubmission extends Model
{
    protected $fillable = [
        'phishing_link_id', 'email', 'password', 'ip_address', 'user_agent'
    ];

    public function link()
    {
        return $this->belongsTo(PhishingLink::class, 'phishing_link_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'about_text',
        'email',
        'whatsapp',
        'github_url',
        'linkedin_url',
        'cv_link',
    ];
}

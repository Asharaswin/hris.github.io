<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function documents() {
        return $this->hasMany(OnboardingDocument::class);
    }

    public function photos() {
        return $this->hasMany(OnboardingPhoto::class);
    }
}

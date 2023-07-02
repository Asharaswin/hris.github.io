<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnboardingPhoto extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function onboarding() {
        return $this->belongTo(Onboarding::class);
    }

}

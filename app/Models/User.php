<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function onboarding() {
        return $this->hasOne(Onboarding::class);
    }

    public function contracts() {
        return $this->hasMany(UserContract::class);
    }

    public function familyData()
    {
        return $this->hasMany(UserFamilyData::class);
    }

    public function formalEducation()
    {
        return $this->hasMany(UserEducationData::class);
    }

    public function informalEducation()
    {
        return $this->hasMany(UserInformalEducationData::class);
    }

    public function emergencyContact() {
        return $this->hasOne(UserEmergencyData::class);
    }

    public function isOnboarding() {
        if ($this->onboarding->percentage == 1000) return false;
        return true;
    }

    public function isAdmin() {
        if ($this->role == 1) return true;
        return false;
    }

    public function getRedirectRoute() {
        if ($this->isAdmin()) {
            return 'dashboard.index';
        }
        else {
            if ($this->isOnboarding()) {
                return $this->routeOnBoarding();
            }
            else {
                return 'dashboard.index';
            }
        }
    }

    public function routeOnBoarding() {
        switch ($this->onboarding->percentage) {
            case 0:
                return 'onboarding.index';
                break;

            case 125:
                return 'onboarding.step-two';
                break;
            

            case 250:
                return 'onboarding.step-three';
                break;

            case 375:
                return 'onboarding.step-four';
                break;

            case 500:
                return 'onboarding.step-five';
                break;


            case 625:
                return 'onboarding.step-six';
                break;

            case 750:
                return 'onboarding.step-seven';
                break;

            case 825:
                return 'onboarding.step-eight';
                break;

            case 1000:
                return 'onboarding.step-eight';
                break;
            default:
                # code...
                break;
        }
    }

    public function familyMother() 
    {
        return $this->familyData->where('relation', 'Ibu')->first();
    }

    public function familyFather() 
    {
        return $this->familyData->where('relation', 'Ayah')->first();
    }

    public function familySiblings() 
    {
        return $this->familyData->where('relation', 'Saudara');
    }
}

<?php

namespace App\Http\Livewire\Admin\Onboarding;

use App\Models\User;
use Livewire\Component;

class OnboardingStepTwo extends Component
{
    public function render()
    {

        $employees = User::whereHas('onboarding', function ($query) {
            return $query->where('percentage', 125);
        })->paginate(5);

        return view('livewire.admin.onboarding.onboarding-step-two', compact('employees'))
        ->extends('layouts.admin')
        ->section('content');
    }
}

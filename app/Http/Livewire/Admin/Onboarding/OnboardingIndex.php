<?php

namespace App\Http\Livewire\Admin\Onboarding;

use Livewire\Component;

class OnboardingIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.onboarding.onboarding-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}

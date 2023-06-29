<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepSeven extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-seven')
        ->extends('layouts.main')
        ->section('content');
    }
}

<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepFive extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-five')
        ->extends('layouts.main')
        ->section('content');
    }
}

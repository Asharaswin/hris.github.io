<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepEight extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-eight')
        ->extends('layouts.main')
        ->section('content');
    }
}

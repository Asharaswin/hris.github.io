<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepFour extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-four')
        ->extends('layouts.main')
        ->section('content');
    }
}

<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepTwoCopy extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-two-copy')
        ->extends('layouts.main')
        ->section('content');
    }
}

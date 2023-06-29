<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepTwo extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-two')
        ->extends('layouts.main')
        ->section('content');
    }
}

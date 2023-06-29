<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepThree extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-three')
        ->extends('layouts.main')
        ->section('content');
    }
}

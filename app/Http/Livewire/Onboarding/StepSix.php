<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepSix extends Component
{
    public function render()
    {
        return view('livewire.onboarding.step-six')
        ->extends('layouts.main')
        ->section('content');
    }
}

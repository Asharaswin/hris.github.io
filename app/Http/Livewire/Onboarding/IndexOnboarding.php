<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class IndexOnboarding extends Component
{
    public function render()
    {
        return view('livewire.onboarding.index-onboarding')
            ->extends('layouts.main')
            ->section('content');
    }
}

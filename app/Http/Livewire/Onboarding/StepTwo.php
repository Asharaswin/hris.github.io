<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class StepTwo extends Component
{
    public $document;

    public function render()
    {

        // check apakah sudah ada dokumen surat izin atau tidak 
        

        return view('livewire.onboarding.step-two')
        ->extends('layouts.main')
        ->section('content');
    }
}

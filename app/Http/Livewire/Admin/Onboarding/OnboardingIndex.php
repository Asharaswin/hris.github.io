<?php

namespace App\Http\Livewire\Admin\Onboarding;

use App\Models\Onboarding;
use Livewire\Component;

class OnboardingIndex extends Component
{
    public $employee_one = [];
    public $employee_two = [];
    public $employee_three = [];
    public $employee_four = [];
    public $employee_five = [];
    public $employee_six = [];
    public $employee_seven = [];
    public $employee_eight = [];

    public function render()
    {
        $this->employee_one = Onboarding::where('percentage', 0)->get();
        $this->employee_two = Onboarding::where('percentage', 125)->get();
        $this->employee_three = Onboarding::where('percentage', 250)->get();
        $this->employee_four = Onboarding::where('percentage', 325)->get();
        $this->employee_five = Onboarding::where('percentage', 500)->get();
        $this->employee_six = Onboarding::where('percentage', 625)->get();
        $this->employee_seven = Onboarding::where('percentage', 750)->get();
        $this->employee_eight = Onboarding::where('percentage', 825)->get();

        return view('livewire.admin.onboarding.onboarding-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}

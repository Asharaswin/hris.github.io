<?php

namespace App\Http\Livewire\Admin\Onboarding;

use App\Models\Onboarding;
use App\Models\User;
use Livewire\Component;

class OnboardingDetail extends Component
{
    public $step;
    public $step_percentage; 

    public function mount($step) {
        $this->step = $step;
        switch ($step) {
            case 'step-one' :
                $this->step_percentage = 0;
                break;
            
            case 'step-two' :
                $this->step_percentage = 125;
                break;
        
            case 'step-three' :
                $this->step_percentage = 250;
                break;
    
            case 'step-four' :
                $this->step_percentage = 375;
                break;

            case 'step-five' :
                $this->step_percentage = 500;
                break;
        
            case 'step-six' :
                $this->step_percentage = 625;
                break;
    
            case 'step-seven' :
                $this->step_percentage = 750;
                break;

            case 'step-eight' :
                $this->step_percentage = 875;
                break;
                                                    
            default:
                # code...
                break;
        }
    }

    public function render()
    {
        $employees = User::whereHas('onboarding', function ($query) {
            return $query->where('percentage', $this->step_percentage);
        })->paginate(5);

        return view('livewire.admin.onboarding.onboarding-detail', compact('employees'))
            ->extends('layouts.admin')
            ->section('content');
    }
}

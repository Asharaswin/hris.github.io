<?php

namespace App\Http\Livewire\Admin\Onboarding;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class OnboardingStepOne extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {

        $employees = User::whereHas('onboarding', function ($query) {
            return $query->where('percentage', 0);
        });

        if ($this->search != null) {
            $employees->where('name', 'like', '%'. $this->search.'%')
                        ->orWhere('email', 'like', '%'. $this->search.'%');
        
        }


        $employees = $employees->paginate($this->perPage);
        return view('livewire.admin.onboarding.onboarding-step-one', compact('employees'))
        ->extends('layouts.admin')
        ->section('content');
    }
}

<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $filter;
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
        $employees = User::query();

        if ($this->search != null) {
            $employees->where('name', 'like', '%'. $this->search.'%')
                        ->orWhere('email', 'like', '%'. $this->search.'%');
        
        }

        $employees->orderByDesc('created_at');
        $employees = $employees->paginate($this->perPage);
        // dd($employees);
        return view('livewire.admin.employee.employee-index', compact('employees'))
        ->extends('layouts.admin')
        ->section('content');
    }
}

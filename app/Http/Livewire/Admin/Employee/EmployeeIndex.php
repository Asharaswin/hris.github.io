<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;

class EmployeeIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.employee.employee-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}

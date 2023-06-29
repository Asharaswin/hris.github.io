<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $male;
    public $female;
    public $users;
    public $user_job_levels;
    public $user_statuses;

    public function render()
    {
        $this->male = User::where('gender','Laki-laki')->count();
        $this->female = User::where('gender','Perempuan')->count();

        $this->users =  DB::table('users')
            ->select(
                DB::raw('concat(10*floor(age/10), \'-\', 10*floor(age/10) + 9) as `range`, count(*) as `numberofusers`'))
            ->groupBy('range')
            ->get();

        $this->user_job_levels = User::join('user_contracts', 'user_contracts.user_id', '=', 'users.id')
                                ->select('user_contracts.job_level', DB::raw('count(*) as total'))
                                ->groupBy('job_level')
                                ->get();
                                

        $this->user_statuses = User::join('user_contracts', 'user_contracts.user_id', '=', 'users.id')
                                ->select('user_contracts.status', DB::raw('count(*) as total'))
                                ->groupBy('status')
                                ->get();
                                
        return view('livewire.admin.dashboard.index')
        ->extends('layouts.admin')
        ->section('content');
    }
}

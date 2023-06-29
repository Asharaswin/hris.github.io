<?php

use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard.index');
    Route::get('/employee', App\Http\Livewire\Admin\Employee\EmployeeIndex::class)->name('employee.index');
    Route::get('/employee-onboarding', App\Http\Livewire\Admin\Onboarding\OnboardingIndex::class)->name('onboarding.admin');


    Route::get('/onboarding', App\Http\Livewire\Onboarding\IndexOnboarding::class)->name('onboarding.index');
    Route::get('/onboarding/step-one', App\Http\Livewire\Onboarding\StepOne::class)->name('onboarding.step-one');
    Route::get('/onboarding/step-two', App\Http\Livewire\Onboarding\StepTwo::class)->name('onboarding.step-two');
    Route::get('/onboarding/step-two-copy', App\Http\Livewire\Onboarding\StepTwoCopy::class)->name('onboarding.step-two-copy');
    Route::get('/onboarding/step-three', App\Http\Livewire\Onboarding\StepThree::class)->name('onboarding.step-three');
    Route::get('/onboarding/step-four', App\Http\Livewire\Onboarding\StepFour::class)->name('onboarding.step-four');
    Route::get('/onboarding/step-five', App\Http\Livewire\Onboarding\StepFive::class)->name('onboarding.step-five');
    Route::get('/onboarding/step-six', App\Http\Livewire\Onboarding\StepSix::class)->name('onboarding.step-six');
    Route::get('/onboarding/step-seven', App\Http\Livewire\Onboarding\StepSeven::class)->name('onboarding.step-seven');
    Route::get('/onboarding/step-eight', App\Http\Livewire\Onboarding\StepEight::class)->name('onboarding.step-eight');
    
});

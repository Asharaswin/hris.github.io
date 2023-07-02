<?php

use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard.index');

        Route::get('/employee', App\Http\Livewire\Admin\Employee\EmployeeIndex::class)->name('employee.index');

        Route::get('/employee-onboarding', App\Http\Livewire\Admin\Onboarding\OnboardingIndex::class)->name('onboarding.admin');  
        Route::get('/employee-onboarding/step-one', App\Http\Livewire\Admin\Onboarding\OnboardingStepOne::class)->name('onboarding.admin.step-one'); 
        Route::get('/employee-onboarding/step-two', App\Http\Livewire\Admin\Onboarding\OnboardingStepTwo::class)->name('onboarding.admin.step-two'); 
        Route::get('/employee-onboarding/step-three', App\Http\Livewire\Admin\Onboarding\OnboardingStepThree::class)->name('onboarding.admin.step-three'); 
        Route::get('/employee-onboarding/step-four', App\Http\Livewire\Admin\Onboarding\OnboardingStepFour::class)->name('onboarding.admin.step-four'); 
        Route::get('/employee-onboarding/step-five', App\Http\Livewire\Admin\Onboarding\OnboardingStepFive::class)->name('onboarding.admin.step-five'); 
        Route::get('/employee-onboarding/step-six', App\Http\Livewire\Admin\Onboarding\OnboardingStepSix::class)->name('onboarding.admin.step-six'); 
        Route::get('/employee-onboarding/step-seven', App\Http\Livewire\Admin\Onboarding\OnboardingStepSeven::class)->name('onboarding.admin.step-seven'); 
        Route::get('/employee-onboarding/step-eight', App\Http\Livewire\Admin\Onboarding\OnboardingStepEight::class)->name('onboarding.admin.step-eight'); 
    });

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

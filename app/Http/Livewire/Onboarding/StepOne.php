<?php

namespace App\Http\Livewire\Onboarding;

use App\Models\User;
use Livewire\Component;
use App\Models\UserFamilyData;
use App\Models\UserEducationData;
use App\Models\UserEmergencyData;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInformalEducationData;

class StepOne extends Component
{
    public $step = 1;
    public $next_step = 'stepOne';
    public $prev_step = 'stepDefault';
    public $name_next_step = 'Data Keluarga';
    public $name_prev_step = '';

    public $name;
    public $birth_place;
    public $birth_date;
    public $email;
    public $phone_number;
    public $religion;
    public $gender;
    public $marital_status;
    public $no_siblings;
    public $height;
    public $weight;
    public $address;
    public $province;
    public $city;
    public $postal_code;
    public $citizenship;
    public $blood_type;
    public $nik;
    public $no_kk;
    public $npwp;
    public $bpjs_jamsostek;
    public $bpjs_kesehatan;

    public $strata;
    public $year_start;
    public $year_end;
    public $description;

    public $year;
    public $description_informal;

    public $emergency_name;
    public $emergency_address;
    public $emergency_phone;
    public $emergency_job;
    public $emergency_relation;

    public $family_name;
    public $family_birth_place;
    public $family_birth_date;
    public $last_education;
    public $job;
    public $relation;
    
    public $father;
    public $mother;
    public $siblings = [];
    public $formal_educations = [];
    public $informal_educations = [];


    public function mount() {

        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->birth_place = $user->birth_place;
        $this->birth_date = $user->birth_date;
        $this->phone_number = $user->phone_number;
        $this->religion = $user->religion;
        $this->no_siblings = $user->no_siblings;
        $this->marital_status = $user->marital_status;
        $this->gender = $user->gender;
        $this->height = $user->height;
        $this->weight = $user->weight;
        $this->address = $user->address;
        $this->province = $user->province;
        $this->city = $user->city;
        $this->postal_code = $user->postal_code;
        $this->citizenship = $user->citizenship;
        $this->blood_type = $user->blood_type;
        $this->nik = $user->nik;
        $this->no_kk = $user->no_kk;
        $this->npwp = $user->npwp;
        $this->bpjs_jamsostek = $user->bpjs_jamsostek;
        $this->bpjs_kesehatan = $user->bpjs_kesehatan;

        $onboarding = $user->onboarding()->get();

    }

    public function render()
    {
        switch ($this->step) {
            case 2:
                $this->father = Auth::user()->familyFather();
                $this->mother = Auth::user()->familyMother();
                $this->siblings = Auth::user()->familySiblings();
                $this->spouse = Auth::user()->familySpouse();
                break;

            case 3:
                $this->formal_educations = Auth::user()->formalEducation()->get();
                $this->informal_educations = Auth::user()->informalEducation()->get();
                break;
            
            case 4:
                $emergency_contact = Auth::user()->emergencyContact()->first();
                $this->emergency_name = $emergency_contact->name ?? '';
                $this->emergency_phone = $emergency_contact->phone_number ?? '';
                $this->emergency_address = $emergency_contact->address ?? '';
                $this->emergency_job = $emergency_contact->job ?? '';
                $this->emergency_relation = $emergency_contact->relation ?? '';
                break;

            default:
                break;
        }

        return view('livewire.onboarding.step-one')
        ->extends('layouts.main')
        ->section('content');
    }

    public function addInformalEducation() 
    {
        $this->validate([
            'year' => 'required',
            'description_informal' => 'required'
        ]);

        UserInformalEducationData::create([
            'year' => $this->year,
            'description' => $this->description_informal,
            'user_id' => Auth::user()->id
        ]);

        $this->year = '';
        $this->description_informal = '';

    }

    public function deleteInformalEducation($id)
    {
        UserInformalEducationData::findOrFail($id)->delete();
    }

    public function addFormalEducation() 
    {
        $this->validate([
            'strata' => 'required',
            'year_start' => 'required',
            'year_end' => 'required',
            'description' => 'required'
        ]);

        UserEducationData::create([
            'strata' => $this->strata, 
            'year_start' => $this->year_start, 
            'year_end' => $this->year_end, 
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        $this->strata = '';
        $this->year_start = '';
        $this->year_end = '';
        $this->description = '';

    }

    public function deleteFormalEducation($id)
    {
        UserEducationData::findOrFail($id)->delete();
    }

    public function stepDefault() 
    {
        $this->step = 1;
        $this->next_step = 'stepOne';
        $this->name_next_step = 'Data keluarga';
        $this->name_prev_step = 'Data Pribadi';
    }

    public function stepOne()
    {
        $this->validate([
            'phone_number' => 'required',
            'name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'address' => 'required'
        ]);
        
        Auth::user()->Update([
            'birth_place' => $this->birth_place,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'religion' => $this->religion,
            'marital_status' => $this->marital_status,
            'phone_number' => $this->phone_number,
            'no_siblings' => $this->no_siblings,
            'height' => $this->height,
            'weight' => $this->weight,
            'address' => $this->address,
            'province' => $this->province,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'citizenship' => $this->citizenship,
            'blood_type' => $this->blood_type,
            'nik' => $this->nik,
            'no_kk' => $this->no_kk,
            'npwp' => $this->npwp,
            'bpjs_jamsostek' => $this->bpjs_jamsostek,
            'bpjs_kesehatan' => $this->bpjs_kesehatan
        ]);

        $this->step = 2;
        $this->next_step = 'stepTwo';
        $this->prev_step = 'stepDefault';
        $this->name_next_step = 'Data Pendidikan';
        $this->name_prev_step = 'Data Pribadi';
    }

    public function stepTwo() 
    {
        $this->step = 3;
        $this->next_step = 'stepThree';
        $this->prev_step = 'stepOne';
        $this->name_next_step = 'Kontak Darurat';
        $this->name_prev_step = 'Data Keluarga';
    }

    public function stepThree() 
    {        
        $this->step = 4;
        $this->next_step = 'stepFour';
        $this->prev_step = 'stepTwo';
        $this->name_next_step = 'Send';
        $this->name_prev_step = 'Data Pendidikan';
    }

    public function stepFour() 
    {
        $this->validate([
            'emergency_name' => 'required',
            'emergency_address' => 'required',
            'emergency_phone' => 'required',
            'emergency_job' => 'required',
            'emergency_relation' => 'required'
        ]);
     
        UserEmergencyData::create([
            'name' => $this->emergency_name,
            'address' => $this->emergency_address,
            'phone_number' => $this->emergency_phone,
            'job' => $this->emergency_job,
            'relation' => $this->emergency_relation,
            'user_id' => Auth::user()->id
        ]);

        Auth::user()->onboarding->update([
            'percentage' => 125
        ]);

        $this->prev_step = 'stepThree';
        return redirect(route('onboarding.step-two'));
    }

    public function addFamily() 
    {
        $this->validate([
            'family_name' => 'required',
            'family_birth_place' => 'required',
            'family_birth_date' => 'required',
            'last_education' => 'required',
            'job' => 'required',
            'relation' => 'required'
        ]);

        UserFamilyData::create([
            'name' => $this->family_name,
            'birth_place' => $this->family_birth_place,
            'birth_date' => $this->family_birth_date,
            'last_education' => $this->last_education,
            'job' => $this->job,
            'relation' => $this->relation,
            'user_id' => Auth::user()->id
        ]);

        $this->family_name = '';
        $this->family_birth_place = '';
        $this->family_birth_date = '';
        $this->last_education = '';
        $this->job = '';
        $this->relation = '';

    }

    public function deleteFamily($id) {
        UserFamilyData::findOrFail($id)->delete();
    }
}

<div>
    @section('page-title', 'Onboarding - HRIS')
    @section('breadcrumb')
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
            <a class="opacity-50 text-slate-700" href="javascript:;">Eigen</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Onboarding</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Onboarding</h6>
    @endsection
    {{-- Do your work, then step back. --}}

    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -m-2">
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-one',
                        'step' => 'Step One : Employee Data',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_one
                    ])
                    @endcomponent
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-two',
                        'step' => 'Step Two : Surat Izin Masuk',
                        'desc' => 'Proses mendapatkan surat izin masuk',
                        'data' => $employee_two
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-three',
                        'step' => 'Step Three : Onboarding by HRD',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_three
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-four',
                        'step' => 'Step Four : Onboarding by User',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_four
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-five',
                        'step' => 'Step Five : Administrasi by HRD',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_five
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-six',
                        'step' => 'Step Six : Perkenalan Ruang',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_six
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-seven',
                        'step' => 'Step Seven : Perkenalan Semua Tim',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_seven
                    ])
                    @endcomponent
                </a>
            </div>
            <div class="w-full max-w-full p-2 mt-0 mb-6 lg:mb-0 lg:w-1/4 lg:flex-none">
                    @component('livewire.admin.onboarding.components.onboarding-card', [
                        'url' => 'onboarding.admin.step-eight',
                        'step' => 'Step Eight : Perkenalan Tim',
                        'desc' => 'Proses penginputan data Karyawan',
                        'data' => $employee_eight
                    ])
                    @endcomponent
                </a>
            </div>
        </div>
    </div>
</div>

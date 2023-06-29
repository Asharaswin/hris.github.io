<div>
    @section('page-title')
        Onboarding Step Two - Eigen Tri Mathema
    @endsection
  
    <div class="section-main">
        <div class="max-w-7xl m-auto pt-5 px-2">
            <div class="md:flex mb-10">
                <div class="md:w-1/4 md:order-1 m-auto">
                    @component('layouts.main.progress', [
                        'progress' => 12.5
                    ])
                    @endcomponent()
                </div>
                <div class="md:w-3/4 text-2xl text-slate-500 md:order-0">
                    Step Two : Surat Izin Masuk
                </div>
            </div>

            <div class="flex bg-white rounded-tl-xl rounded-tr-xl shadow-lg">
                <div class="w-5/6 md:w-4/6 mx-auto py-12 text-center">
                    <button type="button" class="" disabled>
                        <span class="material-icons-outlined text-8xl text-green-500">
                            check_circle
                        </span>
                      </button>
                      <p class="text-2xl font-bold">Surat Izin Anda telah Siap</p>
                      <p>Surat izin anda telah siap, silahkan download <a href="">disini</a></p>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow-lg px-6 py-4 text-center md:text-end rounded-bl-xl rounded-br-xl">
                <a href="{{ route('onboarding.step-three') }}" class="rounded-full bg-lime-800 px-4 py-2 text-white">Step Selanjutnya</a>
            </div>
        </div>
    </div>
</div>

<div>
    @section('page-title')
        Onboarding Step Three - Eigen Tri Mathema
    @endsection 
    
    <div class="section-main">
        <div class="max-w-7xl m-auto pt-5 px-2">
            <div class="md:flex mb-10">
                <div class="md:w-1/4 md:order-1 m-auto">
                    @component('layouts.main.progress', [
                        'progress' => 25
                    ])
                    @endcomponent()
                </div>
                <div class="md:w-3/4 text-2xl text-slate-500 md:order-0">
                    Step Three : Onboarding by HRD
                </div>
            </div>

            <div class="flex bg-white rounded-tl-xl rounded-tr-xl shadow-lg">
                
            </div>
            
            <div class="bg-white overflow-hidden shadow-lg px-6 py-4 text-center md:text-end rounded-bl-xl rounded-br-xl">
                <a href="{{ route('onboarding.step-four') }}" class="rounded-full bg-lime-800 px-4 py-2 text-white">Step Selanjutnya</a>
            </div>
        </div>
    </div>
</div>

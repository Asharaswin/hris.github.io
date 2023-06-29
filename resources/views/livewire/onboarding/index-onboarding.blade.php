<div>

    @section('page-title')
        Onboarding - Eigen Tri Mathema
    @endsection

    <div class="flex section-main">
        <div class="max-w-7xl m-auto">
            <div class="text-center mx-3 md:mx-0">
                <p class="md:text-5xl text-3xl text-center">Halo <span class="font-bold">{{ Auth::user()->name}}</span>,<br> selamat datang di {{ env('COMPANY_NAME') }}</p><br>
                <a href="{{ route('onboarding.step-one') }}" class="rounded-full bg-lime-800 px-4 py-2 md:px-6 text-white md:text-xl">Mulai Perjalanan</a>
            </div>
        </div>
    </div>
</div>

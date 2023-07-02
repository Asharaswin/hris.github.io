<div>
  @section('page-title', 'Dashboard - HRIS')
  @section('breadcrumb')
    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
      <li class="leading-normal text-sm">
        <a class="opacity-50 text-slate-700" href="javascript:;">Eigen</a>
      </li>
      <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
    </ol>
    <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
  @endsection

    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Employee</p>
                    <h5 class="mb-0 font-bold">
                      $53,000
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Onboarding</p>
                    <h5 class="mb-0 font-bold">
                      2,300
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">New Clients</p>
                    <h5 class="mb-0 font-bold">
                      +3,462
                      <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Sales</p>
                    <h5 class="mb-0 font-bold">
                      $103,430
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-3/12 lg:flex-none">
            @component('livewire.admin.dashboard.components.gender-chart', [
                'male' => $male,
                'female' => $female
            ])
            @endcomponent
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-9/12 lg:flex-none">
            @component('livewire.admin.dashboard.components.age-range-chart', [
              'data' => $users
            ])
            @endcomponent
        </div>
      </div>

      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 lg:w-4/12 lg:flex-none">
            @component('livewire.admin.dashboard.components.job-level-chart', [
              'data' => $user_job_levels
            ])
            @endcomponent
        </div>
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-4/12 lg:flex-none">
            @component('livewire.admin.dashboard.components.employee-status-chart', [
              'data' => $user_statuses
            ])
            @endcomponent
        </div>
      </div>
      @include('layouts.admin.sidebar')
    </div>

    @push('scripts')
    @endpush
</div>

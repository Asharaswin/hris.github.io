<div>
    @section('page-title', 'Employee - HRIS')
    @section('breadcrumb')
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Eigen</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal opacity-50 text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']">
                <a class="text-slate-700" href="{{route('onboarding.admin')}}">Onboarding</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Step One</li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Employee</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Step One : Employee Data</h6>
    @endsection

    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex">
                        <h6 class="w-8/12">List Karyawan</h6>
                        <div class="w-4/12 text-end">
                            <input wire:model='search' type="text" id="search" class="border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1.5 text-xs" placeholder="Search ...">                            
                            <select wire:model='perPage' id="perPage" class="border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1.5 pe-8">
                                <option value="10" selected>10</option>
                                <option value="20" >20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Karyawan</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Employed</th>
                                <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $item)
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{$item->cover_url}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">{{$item->name}}</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">{{$item->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400">{{date('d M Y', strtotime($item->created_at))}}</span>
                                    </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-2">

                        {{ $employees->links() }}

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

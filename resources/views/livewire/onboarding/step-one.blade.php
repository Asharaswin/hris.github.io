<div>
    @section('page-title')
        Onboarding Step One - {{ env('COMPANY_NAME') }}
    @endsection
    
    <div class="section-main">
        <div class="max-w-7xl m-auto pt-5 px-2">
            <div class="md:flex mb-10">
                <div class="md:w-1/4 md:order-1 m-auto">
                        @component('layouts.main.progress', [
                            'progress' => 0
                        ])
                        @endcomponent()
                </div>
                <div class="md:w-3/4 text-2xl text-slate-500 md:order-0">
                    Step One : Employee Data
                </div>
            </div>
            
            <div class="mb-4 md:hidden">
                <div class="bg-white overflow-auto shadow-lg rounded-xl p-4">
                    <ol class="items-center w-full flex space-x-8 space-y-0">
                        <li class="flex items-center {{ $step == 1 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                            @if ($step > 1)
                            <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            @else
                            <span class="flex items-center justify-center w-8 h-8 border {{ $step == 1 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                1
                            </span>
                            @endif
                            <span>
                                <h3 class="font-medium leading-tight">Data Pribadi</h3>
                            </span>
                        </li>
                        <li class="flex items-center {{ $step == 2 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                            @if ($step > 2)
                            <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            @else
                            <span class="flex items-center justify-center w-8 h-8 border {{ $step == 2 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                2
                            </span>
                            @endif
                            <span>
                                <h3 class="font-medium leading-tight">Data Keluarga</h3>
                            </span>
                        </li>
                        <li class="flex items-center {{ $step == 3 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                            @if ($step > 3)
                            <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            @else
                            <span class="flex items-center justify-center w-8 h-8 border {{ $step == 3 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                3
                            </span>
                            @endif
                            <span>
                                <h3 class="font-medium leading-tight">Data Pendidikan</h3>
                            </span>
                        </li>
                        <li class="flex items-center {{ $step == 4 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                            @if ($step > 4)
                            <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            @else
                            <span class="flex items-center justify-center w-8 h-8 border {{ $step == 4 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                4
                            </span>
                            @endif
                            <span>
                                <h3 class="font-medium leading-tight">Kontak Darurat</h3>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>


            <div class="flex md:-mx-2">
                <div class="md:w-1/4 w-4/4 px-2 hidden md:inline">
                    <div class="bg-white p-6 overflow-hidden shadow-lg rounded-xl">
                        <ol class="space-y-6">
                            <li class="flex items-center {{ $step == 1 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                                @if ($step > 1)
                                <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                @else
                                <span class="flex items-center justify-center w-8 h-8 border {{ $step == 1 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                    1
                                </span>
                                @endif
                                <span>
                                    <h3 class="font-medium leading-tight">Data Pribadi</h3>
                                </span>
                            </li>
                            <li class="flex items-center {{ $step == 2 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                                @if ($step > 2)
                                <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                @else
                                <span class="flex items-center justify-center w-8 h-8 border {{ $step == 2 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                    2
                                </span>
                                @endif
                                <span>
                                    <h3 class="font-medium leading-tight">Data Keluarga</h3>
                                </span>
                            </li>
                            <li class="flex items-center {{ $step == 3 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                                @if ($step > 3)
                                <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                @else
                                <span class="flex items-center justify-center w-8 h-8 border {{ $step == 3 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                    3
                                </span>
                                @endif
                                <span>
                                    <h3 class="font-medium leading-tight">Data Pendidikan</h3>
                                </span>
                            </li>
                            <li class="flex items-center {{ $step == 4 ? 'text-black' : 'text-gray-500'}} space-x-2.5">
                                @if ($step > 4)
                                <span class=" flex items-center justify-center w-8 h-8 bg-lime-800 rounded-full -left-4 ring-4 ring-white">
                                    <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                @else
                                <span class="flex items-center justify-center w-8 h-8 border {{ $step == 4 ? 'border-black' : 'border-gray-500'}} rounded-full shrink-0 ">
                                    4
                                </span>
                                @endif
                                <span>
                                    <h3 class="font-medium leading-tight">Kontak Darurat</h3>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="md:w-3/4 w-full md:px-2 ">
                    <div class="bg-white overflow-hidden shadow-lg rounded-tl-xl rounded-tr-xl">
                        <div class="md:px-10 px-4 pb-4 pt-10">
                            @if ($step == 1)
                                <div class="flex">
                                    <div class="w-1/4 my-auto">
                                        Nama Lengkap
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='name' type="text" id="name" class="@error('name') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="John" value="{{ old('name')}}">
                                        @error('name') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Tempat, Tanggal Lahir
                                    </div>
                                    <div class="w-3/4">
                                        <div class="grid gap-2 mb-0 md:grid-cols-2">
                                            <div>
                                                <input wire:model.defer='birth_place' type="text" id="birth_place" class="@error('birth_place') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Bandung">
                                                @error('birth_place') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                            <div>
                                                <input wire:model.defer='birth_date' type="date" id="birth_date" class="@error('birth_date') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="Doe">
                                                @error('birth_date') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Email
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='email' type="email" id="email" class="border bg-gray-200 border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm disabled:" placeholder="john@mail.com" disabled>
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Telepon
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='phone_number' type="text" id="phone_number" class="border @error('phone_number') border-red-500 @enderror border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 w-full p-1.5 text-sm" placeholder="081288888888" value="{{ old('phone_number')}}">
                                        @error('phone_number') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Agama
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='religion' type="text" id="religion" class="@error('religion') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" >
                                        @error('religion') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-3">
                                    <div class="w-1/4 my-auto">
                                        Status Pernikahan
                                    </div>
                                    <div class="w-3/4">
                                        <div class="flex">
                                            <div class="flex items-center mr-4">
                                                <input wire:model.defer="marital_status" id="marital_menika" type="radio" value="Menikah" name="inline-radio-group-2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                                <label for="inline-radio" class="ml-2 text-sm">Menikah</label>
                                            </div>
                                            <div class="flex items-center mr-4">
                                                <input wire:model.defer="marital_status" id="marital_belum" type="radio" value="Belum Menikah" name="inline-radio-group-2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                                <label for="inline-2-radio" class="ml-2 text-sm">Belum Menikah</label>
                                            </div>
                                            @error('marital_status') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="flex pt-3">
                                    <div class="w-1/4 my-auto">
                                        Jenis Kelamin
                                    </div>
                                    <div class="w-3/4">
                                        <div class="flex">
                                            <div class="flex items-center mr-4">
                                                <input wire:model.defer="gender" id="inline-radio" type="radio" value="Laki-laki" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                                <label for="inline-radio" class="ml-2 text-sm">Laki-laki</label>
                                            </div>
                                            <div class="flex items-center mr-4">
                                                <input wire:model.defer="gender" id="inline-2-radio" type="radio" value="Perempuan" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                                <label for="inline-2-radio" class="ml-2 text-sm">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Jumlah Saudara
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='no_siblings' type="number" id="no_siblings" class="@error('no_siblings') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="0" >
                                        @error('no_siblings') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Tinggi Badan
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='height' type="number" id="height" class="@error('height') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="185" >
                                        @error('height') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Berat Badan
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='weight' type="number" id="weight" class="@error('weight') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="60" >
                                        
                                        @error('wight') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4">
                                        Alamat
                                    </div>
                                    <div class="w-3/4">
                                        <textarea wire:model.defer='address' id="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg @error('address') border-red-500 @enderror border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan alamat disni ..."></textarea>
                                        
                                        @error('address') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Provinsi
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='province' type="text" id="province" class="@error('province') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Jawa Barat" >
                                        
                                        @error('province') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Kabupaten / Kota
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='city' type="text" id="city" class="@error('city') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Bandung" >
                                    
                                        @error('city') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Kode Pos
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='postal_code' type="text" id="postal_code" class="@error('postal_code') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="97831" >
                                        
                                        @error('postal_code') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Kewarganegaraan
                                    </div>
                                    <div class="w-3/4">
                                        <select wire:model.defer='citizenship' id="citizenship" class="@error('citizenship') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                                            <option selected>Pilih Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                            
                                        @error('citizenship') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Golongan Darah
                                    </div>
                                    <div class="w-3/4">
                                        <select wire:model.defer='blood_type' id="blood_type" class="@error('blood_type') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                                            <option selected>Pilih Golongan Darah</option>
                                            <option value="O">O</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                        </select>
                            
                                        @error('blood_type') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        NIK
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='nik' type="text" id="nik" class="@error('nik') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="7688..." >
                                        @error('nik') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        No KK
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='no_kk' type="text" id="no_kk" class="@error('no_kk') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="64686..." >
                                        @error('no_kk') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        NPWP
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='npwp' type="text" id="npwp" class="@error('npwp') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="67547..." >
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        BPJS Jamsostek
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='bpjs_jamsostek' type="text" id="bpjs_jamsostek" class="@error('bpjs_jamsostek') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="8695..." >
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        BPJS Kesehatan
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='bpjs_kesehatan' type="text" id="bpjs_kesehatan" class="@error('bpjs_kesehatan') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="8979..." >
                                    </div>
                                </div>
                            @elseif($step == 2)
                            <div class="ms-4">
                                <div class="flex">
                                    <div class="w-1/4 my-auto">
                                        Nama
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer="family_name" type="text" id="family_name" class="@error('family_name') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="John">
                                        @error('family_name') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Tempat, Tanggal Lahir
                                    </div>
                                    <div class="w-3/4">
                                        <div class="grid gap-2 mb-0 md:grid-cols-2">
                                            <div>
                                                <input wire:model.defer="family_birth_place" type="text" id="family_birth_place" class="@error('family_birth_place') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Bandung" >
                                                @error('family_birth_place') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                            <div>
                                                <input wire:model.defer="family_birth_date" type="date" id="family_birth_date" class="@error('family_birth_date') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="02/10/2022" >
                                                
                                                @error('family_birth_date') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Pendidikan Terkahir
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='last_education' type="text" id="last_education" class="@error('last_education') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="S1" >
                                        @error('last_education') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Pekerjaan
                                    </div>
                                    <div class="w-3/4">
                                        <input wire:model.defer='job' type="text" id="job" class="@error('job') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="PNS" >
                                        @error('job') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex pt-2">
                                    <div class="w-1/4 my-auto">
                                        Hubungan
                                    </div>
                                    <div class="w-3/4">
                                        <select wire:model.defer='relation' id="relation" class="@error('relation') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                                            <option selected>Pilih Hubungan</option>
                                            <option value="Ayah">Ayah</option>
                                            <option value="Ibu">Ibu</option>
                                            <option value="Saudara">Saudara</option>
                                            <option value="Istri">Istri</option>
                                            <option value="Suami">Suami</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                            
                                        @error('relation') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="py-4 text-end ">
                                    <a wire:click="addFamily" class="rounded-full bg-lime-800 px-4 py-2  text-white">Tambah</a>
                                </div>
                            </div>
                            <hr class="my-2">
                                <div class="flex">
                                    <div class="w-1/2">
                                        <p class="text-lg font-semibold mt-3">Ayah</p>
                                    </div>
                                    @if ($father)
                                    <div class="w-1/2 text-end">
                                        <a wire:click="deleteFamily(`{{$father->id}}`)" class="rounded-full bg-lime-800 px-4 py-2 text-xs text-white">Hapus</a>
                                    </div>
                                    @endif
                                </div>
                                @if ($father)
                                    @component('livewire.onboarding.component.family-data', [
                                        'data' => $father
                                    ])
                                    @endcomponent
                                @else
                                    <div class="flex">
                                        <div class="w-full text-center py-3">
                                            No Data    
                                        </div>    
                                    </div>    
                                @endif

                                <hr class="my-2">

                                <div class="flex">
                                    <div class="w-1/2">
                                        <p class="text-lg font-semibold mt-3">Ibu</p>
                                    </div>
                                    @if ($mother)
                                    <div class="w-1/2 text-end">
                                        <a wire:click="deleteFamily(`{{$mother->id}}`)" class="rounded-full bg-lime-800 px-4 py-2 text-xs text-white">Hapus</a>
                                    </div>
                                    @endif
                                </div>
                                @if ($mother)
                                    @component('livewire.onboarding.component.family-data', [
                                        'data' => $mother
                                    ])
                                    @endcomponent
                                @else
                                    <div class="flex">
                                        <div class="w-full text-center py-3">
                                            No Data    
                                        </div>    
                                    </div>    
                                @endif
                                
                                <hr class="my-2">
                                <p class="text-lg font-semibold mt-3">Saudara</p>
                                @if (count($siblings) > 0)
                                    @foreach ($siblings as $item)
                                        <div class="flex">
                                            <div class="w-1/2">
                                                <p class="text-md font-semibold mt-3">{{ $item->name }}</p>
                                            </div>
                                            <div class="w-1/2 text-end">
                                                <a wire:click="deleteFamily(`{{$item->id}}`)" class="rounded-full bg-lime-800 px-4 py-2 text-xs text-white">Hapus</a>
                                            </div>
                                        </div>
                                        @component('livewire.onboarding.component.family-data', [
                                            'data' => $item
                                        ])
                                        @endcomponent
                                    @endforeach
                                @else
                                <div class="flex">
                                    <div class="w-full text-center py-3">
                                        No Data    
                                    </div>    
                                </div>    
                                @endif

                                @if ($marital_status == 'Menikah')
                                <hr class="my-2">
                                <p class="text-lg font-semibold mt-3">Istri / Suami</p>
                                    @if ($spouse)
                                    @component('livewire.onboarding.component.family-data', [
                                        'data' => $spouse
                                    ])
                                    @endcomponent
                                    @else
                                    <div class="flex">
                                        <div class="w-full text-center py-3">
                                            No Data    
                                        </div>    
                                    </div> 
                                    @endif  
                                @endif
                            @elseif($step == 3)
                                <div>
                                    <p class="text-lg font-semibold mb-2">Formal Education</p>
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex">
                                                <div class="w-1/6 mx-2">
                                                    <label for="strata" class="block mb-2 text-xs text-gray-900">Strata</label>
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <label for="year_start" class="block mb-2 text-xs text-gray-900">Tahun Mulai</label>
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <label for="year_end" class="block mb-2 text-xs text-gray-900">Tahun Selesai</label>
                                                </div>
                                                <div class="w-3/6 mx-2">
                                                    <label for="description" class="block mb-2 text-xs text-gray-900">Deskripsi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex -mx-2 mb-2">
                                                <div class="w-1/6 mx-2">
                                                    <select wire:model.defer="strata" id="strata" class="@error('strata') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                                                        <option selected>Choose</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                    </select>
                                                    @error('name') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <input wire:model.defer="year_start" type="number" id="year_start" class="@error('year_start') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="2012">
                                                    @error('year_start') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <input wire:model.defer="year_end" type="number" id="year_end" class="@error('year_end') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="2015">
                                                    @error('year_end') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-3/6 mx-2">
                                                    <input wire:model.defer="description" type="text" id="description" class="@error('description') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Universitas ...">
                                                    @error('description') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/6 px-2">
                                            <a wire:click="addFormalEducation" class="rounded-full block text-center bg-lime-800 px-4 py-1 text-sm text-white">tambah</a>
                                        </div>
                                    </div>
                                    

                                    @foreach ($formal_educations as $item)
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex -mx-2 mb-2">
                                                <div class="w-1/6 mx-2">
                                                    <input type="text" id="strata" class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="Doe" disabled value="{{ $item->strata }}">
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <input type="number" id="year_start" class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="Doe" disabled value="{{ $item->year_start }}">
                                                </div>
                                                <div class="w-1/6 mx-2">
                                                    <input type="number" id="year_end" class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="Doe" disabled value="{{ $item->year_end }}">
                                                </div>
                                                <div class="w-3/6 mx-2">
                                                    <input type="text" id="description" class="border bg-gray-200 border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="John" disabled value="{{ $item->description }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/6 px-2">
                                            <a wire:click="deleteFormalEducation('{{$item->id}}')" class="rounded-full text-center bg-lime-800 px-4 py-1 text-sm text-white">Delete</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <hr class="my-4">
                                <div>
                                    <p class="text-lg font-semibold mb-2">Informal Education</p>
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex -mx-2">
                                                <div class="w-1/5 mx-2">
                                                    <label for="first_name" class="block mb-2 text-xs text-gray-900">Tahun</label>
                                                </div>
                                                <div class="w-4/5 mx-2">
                                                    <label for="first_name" class="block mb-2 text-xs text-gray-900">Deskripsi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex -mx-2 mb-2">
                                                <div class="w-1/5 mx-2">
                                                    <input wire:model="year" type="number" id="year" class="@error('year') border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " placeholder="2015" >
                                                    
                                                    @error('year') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-4/5 mx-2">
                                                    <input wire:model="description_informal" type="text" id="description_informal" class="@error('description_informal') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Pelatihan" >
                                                    
                                                    @error('description_informal') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/6 px-2">
                                            <a wire:click="addInformalEducation" class="rounded-full block text-center bg-lime-800 px-4 py-1 text-sm text-white">tambah</a>
                                        </div>
                                    </div>


                                    @foreach ($informal_educations as $item)
                                    <div class="flex">
                                        <div class="w-5/6">
                                            <div class="flex -mx-2 mb-2">
                                                <div class="w-1/5 mx-2">
                                                    <input type="number" id="year" class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg w-full p-1.5" value="{{ $item->year }}" disabled>
                                                </div>
                                                <div class="w-4/5 mx-2">
                                                    <input type="text" id="description_informal" class="border bg-gray-200 border-gray-300 text-gray-900 rounded-lg w-full p-1.5 text-sm" value="{{ $item->description }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/6 px-2">
                                            <a wire:click="deleteInformalEducation('{{$item->id}}')" class="rounded-full text-center bg-lime-800 px-4 py-1 text-sm text-white">Delete</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @elseif($step == 4)
                                <div>
                                    <p>ORANG YANG DAPAT DIHUBUNGI SEGERA DALAM KEADAAN MENDESAK / DARURAT</p>
                                    <div class="flex pt-6">
                                        <div class="w-1/4 my-auto">
                                            Nama Lengkap
                                        </div>
                                        <div class="w-3/4">
                                            <input wire:model.defer='emergency_name' type="text" id="emergency_name" class="@error('emergency_name') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="John" value="{{ old('emergency_name')}}">
                                            @error('emergency_name') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="w-1/4 my-auto">
                                            Telepon
                                        </div>
                                        <div class="w-3/4">
                                            <input wire:model.defer='emergency_phone' type="text" id="emergency_phone" class="border @error('emergency_phone') border-red-500 @enderror border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 w-full p-1.5 text-sm" placeholder="081288888888" value="{{ old('emergency_phone')}}">
                                            @error('emergency_phone') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="w-1/4">
                                            Alamat
                                        </div>
                                        <div class="w-3/4">
                                            <textarea wire:model.defer='emergency_address' id="emergency_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg @error('emergency_address') border-red-500 @enderror border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan alamat disni ..."></textarea>
                                            @error('emergency_address') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="w-1/4 my-auto">
                                            Pekerjaan
                                        </div>
                                        <div class="w-3/4">
                                            <input wire:model.defer='emergency_job' type="text" id="emergency_job" class="@error('emergency_job') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="CEO" value="{{ old('emergency_job')}}">
                                            @error('emergency_job') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="w-1/4 my-auto">
                                            Relasi
                                        </div>
                                        <div class="w-3/4">
                                            <input wire:model.defer='emergency_relation' type="text" id="emergency_relation" class="@error('emergency_relation') border-red-500 @enderror border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" placeholder="Adik" value="{{ old('emergency_relation')}}">
                                            @error('emergency_relation') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-lg px-6 py-4 text-end rounded-bl-xl rounded-br-xl">
                        @if ($step > 1)
                        <a wire:click="{{$prev_step}}" class="rounded-full bg-lime-800 px-4 py-2  text-white">Sebelumnya : {{ $name_prev_step }}</a>
                        @endif
                        

                        <a wire:click="{{$next_step}}" class="rounded-full bg-lime-800 px-4 py-2  text-white">Selanjutnya : {{ $name_next_step }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

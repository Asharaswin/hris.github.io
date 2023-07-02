
<div class="ms-4">
    <div class="flex">
        <div class="w-1/4 my-auto">
            Nama
        </div>
        <div class="w-3/4">
            <input type="text" id="first_name" class=" border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" disabled value="{{ $data->name }}">
        </div>
    </div>
    <div class="flex pt-2">
        <div class="w-1/4 my-auto">
            Tempat, Tanggal Lahir
        </div>
        <div class="w-3/4">
            <div class="grid gap-2 mb-0 md:grid-cols-2">
                <div>
                    <input type="text" id="first_name" class=" border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" disabled value="{{ $data->birth_place }}">
                </div>
                <div>
                    <input type="date" id="last_name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 " disabled value="{{ $data->birth_date }}">
                </div>
            </div>
        </div>
    </div>
    <div class="flex pt-2">
        <div class="w-1/4 my-auto">
            Pendidikan Terkahir
        </div>
        <div class="w-3/4">
            <input type="text" id="first_name" class=" border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" disabled value="{{ $data->last_education }}">
        </div>
    </div>
    <div class="flex pt-2">
        <div class="w-1/4 my-auto">
            Pekerjaan
        </div>
        <div class="w-3/4">
            <input type="text" id="first_name" class=" border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-1.5 text-sm" disabled value="{{ $data->job }}">
        </div>
    </div>
</div>


<a href="{{route($url)}}">
    <div class="shadow-xl bg-white rounded-xl p-6">
        <p class="mb-0 font-sans font-bold leading-normal text-md">{{$step}}</p>
        <p class="mb-2">{{$desc}}</p>
        <div class="flex">
            <div class="mt-2 avatar-group w-3/4">
                @foreach ($data as $key => $item)
                    <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 {{$key > 0 ? '-ml-4' : ''}} text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                        <img src="{{$item->user->cover_url}}" class="w-full rounded-full" alt="team1" />
                    </a>
                @endforeach
            </div>
            <div class="w-1/4 text-end text-sm font-semibold">
                <span>{{count($data)}} User</span>
            </div>
        </div>
    </div>
</a>
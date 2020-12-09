{{-- Clinic Page --}}

<div class="flex flex-col justify-center mb-6 p-5 shadow-md">
    <h1 class="text-lg font-bold">Nearest Clinic</h1>
    <p>Terdapat<span class="font-bold"> <span id="total-clinic">{{count($locations)}}</span> Klinik Gigi</span> terdekat dari Anda.</p>
</div>

@if (!empty($locations))
    {{-- List of clinic go here --}}
    <ul id="list-clinic" class="h-96 overflow-y-scroll">
        @foreach ($locations as $index => $location)
            <li class="mt-3 p-5 rounded-lg @if(!empty($loc) && $loc['id'] == $location['id']) bg-blue-100 text-blue-500 @else border-4 border-blue-100 text-blue-500 @endif" wire:click="show_location_detail({{$index}})">
                <a href="javascript:;">
                    <h2>{{$location['title']}}</h2>
                    <p>{{$location['distance']}}</p>
                    <p>{{$location['address']['label']}}</p>
                </a>
            </li>
        @endforeach
    </ul>
@else
<div class="flex justify-center">
    <div>
        <x-loading />
    </div>
</div>
@endif


{{-- End of Clinic Page --}}
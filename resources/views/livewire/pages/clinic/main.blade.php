{{-- Clinic Page --}}

<div class="flex flex-col justify-center sticky top-0 bg-white mb-5 px-5 pb-5 pt-10  shadow-md">
    <x-main-title icon="local_hospital" heading="NEAREST CLINIC" />

    @if (!empty($locations))
        <p><span class="font-bold"> <span id="total-clinic">{{count($locations)}}</span> Dental Clinics </span> found closest to you</p>
    @else
        <p>Looking for the closest clinics to you...</p>
    @endif
</div>

<div class="flex flex-col justify-center mb-5">
    @if (!empty($locations))
        {{-- List of clinic go here --}}
        <ul id="list-clinic" class="flex flex-col w-full px-5">
            @foreach ($locations as $index => $location)
                <li class="w-full mt-3 p-5 rounded-lg cursor-pointer @if(session()->has('location') && session('location')['id'] == $location['id']) bg-blue-500 text-blue-100 @else bg-blue-100 text-blue-500 @endif" wire:click="show_location_detail({{$index}})">
                    <h2>{{$location['title']}}</h2>
                    <p>{{$location['distance'] > 1000 ? number_format((float)($location['distance'] / 1000), 1, '.', '') . " km" : $location['distance'] . " m"}}</p>
                    <p>{{$location['address']['street'] . ', ' . $location['address']['city']}}</p>
                </li>
            @endforeach
        </ul>
    @else
        <div>
            <x-loading />
        </div>
    @endif
</div>


{{-- End of Clinic Page --}}
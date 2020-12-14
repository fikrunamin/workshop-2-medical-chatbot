<div>
    <x-secondary-title :heading="$location['title'] ?? 'Clinic Detail'"/>

    <div wire:ignore style="width: 100%; height: 300px;" id="mapContainer">
        <div  class="bg-gray-100 flex justify-center items-center w-full h-full shadow-inner shadow-md">
            <div class="bg-blue-500 text-gray-100 flex items-center p-5 rounded-full hover:shadow-md cursor-pointer" wire:click="refresh_location()">
                <span class="material-icons text-3xl">
                    replay
                </span>
            </div>
        </div>
    </div>

    @if (!empty($location))
        <div class="px-5">
            <h2>{{$location['title']}}</h2>
        </div>
    @endif
</div>
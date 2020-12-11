<div>
    <x-secondary-title :heading="$location['title'] ?? 'Clinic Detail'"/>

    <div wire:ignore style="width: 100%; height: 300px;" id="mapContainer"></div>

    @if (!empty($location))
        <div class="px-5">
            <h2>{{$location['title']}}</h2>
        </div>
    @endif
</div>
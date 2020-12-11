{{-- Search or Home Page --}}
<div class="flex flex-col justify-center sticky top-0 bg-white mb-5 px-5 pb-5 pt-10 shadow-md">
    <x-main-title icon="search" heading="SEARCH" />
    <label for="disease" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Search for Disease</label>
    <div class="relative mb-5">
        <div class="inline-flex items-center justify-center absolute right-0 top-0 h-full w-10 text-gray-400">
            <span class="material-icons text-blue-400">
                search
            </span>
        </div>
        <input id="disease" wire:model="search_disease" type="text" name="disease" class="text-sm text-base placeholder-gray-500 pl-4 pr-10 rounded-full bg-blue-100 w-full py-2" placeholder="Caries Media" />
    </div>
    
    @if ($search_disease != "")
        <p><span class="font-bold">{{$total_diseases}} Results</span> of "{{$search_disease}}"</p>
    @endif
</div>
<div class="flex justify-center">
    <div wire:loading wire:target="search_disease">
        <x-loading />
    </div>
</div>
<div class="px-5 mb-5">
    @if ($search_disease != "")
        <ul class="flex flex-col justify-center w-full" wire:loading.remove>
            @foreach ($diseases as $disease)
            <li class="mt-3 p-5 w-full rounded-lg cursor-pointer @if($disease->id == $id_disease) bg-blue-500 text-blue-100 @else bg-blue-100 text-blue-500 @endif" wire:click="show_disease_detail({{$disease->id}})">
                <h3>{{ $disease->name }}</h3>
            </li>
            @endforeach
        </ul>
    @else
    @endif
</div>
{{--End of Search or Home Page --}}
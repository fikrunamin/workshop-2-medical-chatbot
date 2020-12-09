{{-- Search or Home Page --}}
<div class="flex flex-col justify-center mb-6 p-5 shadow-md">
    <label for="disease" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Search for Disease</label>
    <div class="relative mb-5">
        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
            <span class="material-icons">
                search
            </span>
        </div>
        <input id="disease" wire:model="search_disease" type="text" name="disease" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Caries Media" />
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
<div>
    @if ($search_disease != "")
        <ul class="h-96 px-5 overflow-y-scroll" wire:loading.remove>
            @foreach ($diseases as $disease)
            <li class="mt-3 p-5 rounded-lg @if($disease->id == $id_disease) bg-blue-100 text-blue-500 @else border-4 border-blue-100 text-blue-500 @endif" wire:click="show_disease_detail({{$disease->id}})">
                <h3>{{ $disease->name }}</h3>
            </li>
            @endforeach
        </ul>
    @else
    @endif
</div>
{{--End of Search or Home Page --}}
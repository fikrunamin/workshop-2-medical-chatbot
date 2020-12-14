<div class="col-span-4 sm:col-span-4 h-screen max-h-screen overflow-y-auto bg-blue-100 @if ($visibility == false) hidden @else @endif">
    @switch($page)
    
        @case("search")
            @include('livewire.pages.search.secondary')
        @break

        @case("clinic")
            @include('livewire.pages.clinic.secondary')
        @break

        @case("profile")
            @include('livewire.pages.profile.secondary')
        @break
        
        @default
        @break
        
    @endswitch
</div>

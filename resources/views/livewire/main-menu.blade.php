<div class="col-span-3 h-screen max-h-screen overflow-y-auto">
    @switch($page)

        @case("search")
            @include('livewire.pages.search.main')
        @break

        @case("clinic")
            @include('livewire.pages.clinic.main')
        @break

        @case("profile")
            @include('livewire.pages.profile.main')
        @break

        @default
        @break
        
    @endswitch
</div>

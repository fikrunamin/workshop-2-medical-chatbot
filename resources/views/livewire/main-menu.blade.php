<div>
    @switch($page)

        @case("search")
            @include('livewire.pages.search.main')
        @break

        @case("clinic")
            @include('livewire.pages.clinic.main')
        @break

        @default
        @break
        
    @endswitch
</div>

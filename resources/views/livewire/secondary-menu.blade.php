<div class="bg-blue-100">
    {{$page}}

    @switch($page)

        @case("search")
            @include('livewire.pages.search.secondary')
        @break

        @case("clinic")
            @include('livewire.pages.clinic.secondary')
        @break

        @default
        @break
        
    @endswitch
</div>

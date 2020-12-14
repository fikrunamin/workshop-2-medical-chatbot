<div id="chatbot" class="col-span-4
    @if (session('secondary_menu_visibility'))
        sm:col-span-4
    @else
        sm:col-span-8
    @endif
    h-screen max-h-screen overflow-y-auto sm:block @if ($visibility) block @else hidden @endif ">

    {{-- Chatbot Component goes here --}}
    @switch($section)
        @case('new-user')
            @include('livewire.pages.chatbot.new-user')
            @break
        @case('chat-section')
            @include('livewire.pages.chatbot.chat-section')
            @break
        @default
            
            @break
    @endswitch
</div>
<div id="chatbot" class="
    @if (session('secondary_menu_visibility'))
        col-span-4
    @else
        col-span-8
    @endif
    h-screen max-h-screen overflow-y-auto">

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
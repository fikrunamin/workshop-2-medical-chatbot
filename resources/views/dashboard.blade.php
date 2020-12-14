<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="mx-auto">
            <div class="bg-white flex flex-col h-screen max-h-screen ">
                <div class="grid grid-cols-4 sm:grid-cols-12 gap-0 flex-none">

                        {{-- Sidebar Navigation --}}
                        <livewire:sidebar-navigation />

                        {{-- Main Menu --}}
                        <livewire:main-menu />

                        {{-- Secondary Menu --}}
                        <livewire:secondary-menu />
                        
                        {{-- Chatbot Section--}}
                        <livewire:chatbot-section />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

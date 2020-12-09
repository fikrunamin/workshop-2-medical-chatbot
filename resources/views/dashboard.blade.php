<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="mx-auto">
            <div class="bg-white flex flex-col h-screen max-h-screen">
                <div class="grid grid-cols-12 gap-0 flex-none h-full max-h-full overflow-hidden">
                    <div class="h-full">
                        <livewire:sidebar-navigation />
                    </div>
                    <div class="col-span-3 h-auto">
                        {{-- Main Menu --}}
                        <livewire:main-menu />
                    </div>
                    <div class="col-span-4 bg-blue-100">
                        <livewire:secondary-menu />
                    </div>
                    <div class="col-span-4">
                        {{-- Chatbot --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

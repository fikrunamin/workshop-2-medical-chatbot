@props(['submit'])

<div {{ $attributes->merge(['class' => 'grid grid-cols-1']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="shadow overflow-hidden rounded-md">
                <div class="bg-white p-6">
                    <div class="grid grid-cols-6 gap-6">
                        {{ $form }}
                    </div>
                </div>

                @if (isset($actions))
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right">
                        {{ $actions }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>

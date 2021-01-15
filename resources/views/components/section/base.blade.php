<div {{ $attributes->merge(['class'=>'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2'])}}>
    <div class="-mx-3 md:flex mb-6">
        <x-section.heading>
            <x-slot name="icon">{{ $icon }}</x-slot>
            <x-slot name="text">{{ $text }}</x-slot>
        </x-section.heading>
        {{$slot}}
    </div>
</div>

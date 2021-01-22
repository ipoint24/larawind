<x-default-layout>
    <x-section.base>
        <x-slot name="top">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Laravel Livewire: Parent-Child Form Example
            </h2>
            <h6>
                <a href="https://www.youtube.com/watch?v=iuIEqOcQi6g">Quelle</a>
            </h6>
        </x-slot>
        <x-slot name="bottom">
            Kunde
            @livewire('products')
        </x-slot>
    </x-section.base>
</x-default-layout>>

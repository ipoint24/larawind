<div>
    <x-section.base>
        <x-slot name="top">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Laravel FileUploader (BitFumes)
            </h2>
            <h6>
                <a href="https://www.youtube.com/watch?v=YkeKBe8l-lk&list=PLe30vg_FG4OQ8b813BDykoYz95Zc3xUWK&index=22">Quelle</a>
            </h6>
        </x-slot>
        <x-slot name="bottom">
            <form wire:submit.prevent="save">
                <input type="file" wire:model="photos" multiple>

                @error('photos.*') <span class="error">{{ $message }}</span> @enderror

                <button type="submit">Save Photo</button>
            </form>
        </x-slot>
    </x-section.base>
</div>

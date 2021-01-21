<div>
    <x-section.base>
        <x-slot name="top">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Laravel Livewire Component Data Share (Bitfumes)
            </h2>
            <h6>
                <a href="https://www.youtube.com/watch?v=vhoqp5QkP_8&list=PLe30vg_FG4OQ8b813BDykoYz95Zc3xUWK&index=15">Quelle</a>
            </h6>
        </x-slot>
        <x-slot name="bottom">
            <form class="w-2/3" wire:submit.prevent="addComment">
                <input
                    type="text"
                    class="w-2/3 rounded border shadow p-2 mr-2 my-2"
                    placeholder="Whats in your mind"
                    wire:model.lazy="newComment"
                >
                <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
                @foreach($comments as $comment)
                    <div class="rounded border shadow p-3 my-2">
                        <div class="flex justify-start my-2">
                            <p class="font-bold text-lg">{{$comment->title}}</p>

                            <p class="mx-3 py1 text-xs text-gray-500 font-semibold">{{ $comment->dateForHumans($comment->created_at) }}</p>
                        </div>
                        <p class="text-gray-800">{{$comment->body}}</p>
                    </div>
                @endforeach
            </form>
        </x-slot>
    </x-section.base>
</div>



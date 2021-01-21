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
            @foreach($comments as $comment)
                <div class="font-semibold">{{$comment->title}}</div>
                <div>{{$comment->body}}</div>
            @endforeach
        </x-slot>
    </x-section.base>
</div>



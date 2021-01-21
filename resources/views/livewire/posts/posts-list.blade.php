<div>
    <h1 class="text-3xl">Posts</h1>
    @foreach($posts as $post)
        <div class="rounded border shadow p-3 my-2" wire:click="$emit('postSelected',{{$post->id}})">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="font-bold text-lg">{{$post->title}} [{{$post->id}}]</p>
                </div>
            </div>
            <div class="flex">
                <p class="text-gray-800">{{$post->body}}</p>
            </div>
        </div>
    @endforeach
</div>

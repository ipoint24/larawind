<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class PostComments extends Component
{
    use WithPagination;

    public $newComment;
    public $image;
    public $postId ;

    protected $listeners = [
        'fileUpload'     => 'handleFileUpload',
        'ticketSelected',
    ];

    public function postSelected($postId)
    {
        $this->postId = $postId;
    }

    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function updated($field)
    {
        $this->validateOnly($field, ['newComment' => 'required|max:255']);
    }

    public function addComment()
    {
        $this->validate(['newComment' => 'required|max:255']);
        $image          = $this->storeImage();
        $createdComment = Comment::create([
            'body'              => $this->newComment, 'user_id' => 1,
            'image'             => $image,
            'support_ticket_id' => $this->postId,
        ]);
        $this->newComment = '';
        $this->image      = '';
        session()->flash('message', 'Comment added successfully 😁');
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        $img   = ImageManagerStatic::make($this->image)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;
    }

    public function remove($commentId)
    {
        $comment = Comment::find($commentId);
        Storage::disk('public')->delete($comment->image);
        $comment->delete();
        session()->flash('message', 'Comment deleted successfully');
    }

    public function render()
    {
        return view('livewire.posts.post-comments', [
            //'comments' => Comment::where('post_id', $this->postId)->latest()->paginate(2),
            'comments' => Comment::latest()->paginate(3),
        ])
        ->layout('layouts.default');
    }

}

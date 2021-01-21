<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Http\Traits\DateTimeTrait;

class Comment extends Model
{
    use HasFactory;
    use DateTimeTrait;

    protected $fillable = [
        'title', 'body', 'user_id', 'post_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

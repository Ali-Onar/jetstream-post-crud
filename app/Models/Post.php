<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'body', 'image_path', 'user_id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}

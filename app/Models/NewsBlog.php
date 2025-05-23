<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsBlog extends Model
{
    use HasFactory;
    protected $table = 'newsblogs';

    protected $fillable = [
        'title',
        'content',
        'image',
        'author',
        'published_at'
    ];
}

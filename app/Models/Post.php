<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'tag_id', 'title', 'desc'];


    public function tag() 
    {
        return $this->belongsTo(Tag::class);
    }

}

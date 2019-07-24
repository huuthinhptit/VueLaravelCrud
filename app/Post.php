<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    public $timestamps = false;

    protected $fillable = ['title', 'body'];
}

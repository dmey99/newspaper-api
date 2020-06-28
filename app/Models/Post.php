<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
      'title',
      'article',
      'image',
      'theme_id'
    ];

    public function theme()
    {
      return $this->belongsTo(Theme::class);  
    }
}

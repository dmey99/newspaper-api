<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Theme, Post};

class NewsController extends Controller
{
    public function api()
    {
        $response['news']  = Post::join('themes', 'themes.id', 'posts.theme_id')->get();
        $response['theme'] = Theme::get();
        $response['banner'] = Post::join('themes', 'themes.id', 'posts.theme_id')->limit(3)->inRandomOrder()->get();
        return $response;
    }
}

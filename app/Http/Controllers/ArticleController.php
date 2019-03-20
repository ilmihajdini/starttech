<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticleController extends Controller
{   
    public function getIndex(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('article.index')->withPosts($posts);
        
    }
    public function getSingle($slug){

        // fetch from the database based on slug 
        $post = Post::where('slug', '=', $slug)->first();
        // return the view and pass  in the post obj.
        return view('article.single')->withPost($post);  

    }
}

<?php 

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

    public function getIndex() {
        $posts = Post::orderBy('id', 'desc')->Limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Ilmi';
        $last = 'Hajdini';
        $email= 'ilmihajdini@gmail.com';
    

        $fullname  = $first . " " . $last ;

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
      

        return view('pages.about')->withData($data);

        
    }

    public function getContact(){

        return view('pages.contact');

    }

};


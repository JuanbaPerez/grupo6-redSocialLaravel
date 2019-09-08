<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function all() {

        $posts = Post::paginate(10);


        return view("posts", compact("posts"));
    }


    public function detail($id)
    {
        $post = Post::find($id);

        return view("/post", compact("post"));
    }



    public function add () {
        $posts = Post::all();

        return view("addPost", compact("posts"));


    }


    public function store (Request $req) {
        $rules = [
            "image" => "required|image|",
            "description" => "string"

        ];

        $this->validate($req, $rules);

        $post = New Post();

        $post->image = $req->image;
        $post->description = $req->description;


        $post->save();


        return redirect("/post/" . $post->id);
    }
}

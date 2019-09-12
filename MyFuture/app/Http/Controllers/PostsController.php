<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;



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
            "image" => "required",
            "description" => "string",
            "user_id" => "integer"

        ];

        $this->validate($req, $rules);



        $post = New Post();

        $path = Storage::disk('public')->put('posts', $req->file('image'));

        $post->fill(['image' => asset($path)]);




        $post->description = $req->description;
        $post->user_id = $req->user()->id;




        $post->save();


        return redirect("/post/" . $post->id);
    }
}

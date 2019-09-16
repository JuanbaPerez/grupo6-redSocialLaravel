@extends('layout')

@section("title")
Posts
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check our Posts</h1>
</div>

<ul style="list-style-type: none">
    @forelse($posts as $post)
    <div class="postContainer">


        <div class="photoProfileContainer">
            <img class="profilePicture" src="{{asset('storage/mJG1PzYLEjNedOGHUIjvxyGqpoc3vXxLPWdVlv8i.png')}}">

            <div class=" userName">
            <h2>{{$post->user["userName"]}}</h2>
            <p>30 minutes</p>
        </div>

    </div>

    <div class="postImage">
        <img style="width: 100%" src="{{asset('storage/posts/LvG675j6XkyP2bNNFWEXOSM2J5gayKHyLxSC8o7f.jpeg')}}">
    </div>

    <div class="description">
        <p><a style="color: black; font-size: 30px" href="/post/{{$post->id}}">
                {{$post->description}}
            </a></p>
    </div>


    <div class="postIcons">

        <div class="postIcons-heart">
            <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 30</i></button>

        </div>


        <div class="postIcons-comment">

            <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 12</i></button>

        </div>
    </div>





    </div>


    @empty
    <p>
        There are no posts
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ul>


@endsection



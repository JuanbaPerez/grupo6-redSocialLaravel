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
            <img class="profilePicture" src="../img/franky.jpg" alt="profile">

            <div class="userName">
                <h2>Franky Funk</h2>
                <p>30 minutes</p>
            </div>

        </div>

        <div class="postImage">
            <img style="width: 100%" src="{{asset('storage/posts/8um6oVJxwxlga0ljuDdyz5DbOreJijVcoSLPmagP.png')}}">
        </div>

        <div class="description">
            <p>{{$post->description}}</p>
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

<!-- <li>
    <a style="color: black" href="/post/{{$post->id}}">
        {{$post->description}}
    </a>
    <img style="width: 50%" src="{{asset('storage/posts/BQWf2foy4NWNChxkkDzwYd1ubZwFn7tQC4zeOCCb.jpeg')}}">
</li> <br> -->

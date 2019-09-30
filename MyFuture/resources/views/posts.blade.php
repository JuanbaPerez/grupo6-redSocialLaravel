@extends('layout')
@extends('layouts.app')


@section("title")
Posts
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check our Posts</h1>
</div>

<ul style="list-style-type: none">
    @forelse($posts as $key => $post)

    <div class="postContainer">


        <div class="photoProfileContainer">
            <img class="profilePicture" src="../../../storage/avatar/{{$post->user['avatar'] }}">


            <div class="userName">


                <h2>
                    <a style="color: black; font-size: 15px" href="/user/{{$post->user->id}}">{{$post->user["userName"]}}
                    </a>
                </h2>
                <p>30 minutes</p>
            </div>

        </div>

        <div class="postImage">


            <img class="photoContainer" src="../../../storage/avatar/{{$post['image'] }} ">

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

{{$posts->links()}}


@endsection

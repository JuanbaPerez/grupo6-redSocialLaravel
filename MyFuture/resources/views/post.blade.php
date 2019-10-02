@extends('layout')
@extends('layouts.app')

@section("title")
Posts
@endsection

@section("main")



<div class="jumbotron">
    <h1>Detail Post</h1>
</div>


<main>

    <div class="arrowBack">

        <a href="/posts"> <i class="fa fa-arrow-left arrowFont"></i> </a>
    </div>

    <div class="postContainer postDetailContainer">


        <div class="photoProfileContainer">
            <img class="profilePicture" src="../../../storage/avatar/{{ Auth::user()->avatar }}" alt="profile">

            <div class="userName">
                <h2>{{Auth::user()->userName}}</h2>
                <p>1hs</p>
            </div>

        </div>

        <div class="postImage">
            <img src="../../../storage/avatar/{{ $post->image }}" alt="postFoto">
        </div>
        <hr>
        <div class="details-Comments">
            <div class="photoProfileContainer">
                <img class="profilePicture" src="../../../storage/avatar/{{ Auth::user()->avatar }}" alt="profile">



                <div class="details-Nick">
                    <h2>{{Auth::user()->userName}}</h2>
                    <hr>
                    <div class="Est">
                        <p>{{$post->description}}</p>
                    </div>


                </div>

            </div>

        </div>

        <hr>
        <div class="user-Details-Container">

            <div class="user-Image-Profile">
                <img class="user-Image-Profile" src="../data/img/profilepic.jpg" alt="profile">
            </div>

            <div class="comments-Container">
                <h2 class="user-Name">Franky Style</h2>
                <p class="users-Comments">WOW!</p>
            </div>

        </div>

        <div class="user-Details-Container">

            <div class="user-Image-Profile">
                <img class="user-Image-Profile" src="../data/img/profilepic.jpg" alt="profile">
            </div>

            <div class="comments-Container">
                <h2 class="user-Name">Homer el mero mero</h2>
                <p class="users-Comments">AMAZING!</p>
            </div>

        </div>

        <div class="user-Details-Container">

            <div class="user-Image-Profile">
                <img class="user-Image-Profile" src="../data/img/profilepic.jpg" alt="profile">
            </div>

            <div class="comments-Container">
                <h2 class="user-Name">C.R.O</h2>
                <p class="users-Comments">DELUXE!</p>
            </div>

        </div>

        <hr>

        <section>


            <div class="postIcons">

                <div class="postIcons-heart">
                    <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 38</i></button>

                </div>


                <div class="postIcons-comment">

                    <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 3</i></button>

                </div>
            </div>


        </section>

    </div>

</main>

@if (Auth::check())
<form class="" action="/posts/delete" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">
    <button type="submit" name="button" class="btn btn-danger">Delete Post</button>
</form>
@endif

@endsection

@extends('layout')
@extends('layouts.app')

@section("title")
User: {{$user->name}}
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check User {{$user->name}} <br>detail</h1>
</div>

@if (Auth::check() && Auth::user()->isAdmin())

<div>
    <button class="btn btn-danger">
        <a href="{{ route('admin/dashboard') }}">Administrador</a>
    </button>
</div>


@endif

<ul style="list-style-type:none; background-color: lightgrey; width: 100%; margin: 0 auto; border-radius: 15px; font-size: 30px">


    <li style="font-family: 'Cinzel Decorative', cursive">
        <strong>Usuario: </strong> {{$user->name}}
        <br>
        <strong>Nickname: </strong> {{$user->userName}}
        <br>
        <strong>Apellido: </strong> {{$user->lastName}}
        <br>
        <strong>Email: </strong> {{$user->email}}
        <br>
        <strong>Fecha de Nacimiento:</strong> {{$user->birthday}}



    </li>


</ul>



<div class="addPostContainer">
    <a href=" {{ route('posts/add')}} "><i class="fa fa-plus">Add Post</i></a>
</div>

<main class="profileUserContainer">



    <div class="mobileAddPostContainer">
        <a href=" {{ route('posts/add')}} "><i class="fa fa-plus">Add Post </i></a>
    </div>



    <div class="postContainerProfile">


        @forelse ($user->posts as $key => $post)
        <div class="postImageProfile">

            <div class="single-img">


                <img src="../../../storage/avatar/{{ $post->image }}">

                <h2 style="font-weight:bold">
                    {{$post['description']}}
                </h2>


                <div class="img-overlay">

                    <div class="buttonsContainer">

                        <div style="margin: 0 auto; height: auto;" class="">
                            <a href=" {{ route('post/detail', $post->id) }} ">
                                <i style="font-size: 100px" class="fa fa-plus"></i>
                            </a>

                        </div>


                    </div>

                </div>
            </div>

        </div>

    <hr style="border: 1px solid red" >
        @endforeach














    </div>
    </div>








    <a href="/users">
        <button class="btn btn-primary" type="button" name="button">All Users</button>
    </a>
    <a href="/posts">
        <button class="btn btn-primary" type="button" name="button">All Posts</button>
    </a>

    <a href="/update">
        <button class="btn btn-primary" type="button" name="button">Edit</button>
    </a>

    @endsection

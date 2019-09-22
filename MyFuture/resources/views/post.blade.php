@extends('layout')
@extends('layouts.app')

@section("title")
Posts
@endsection

@section("main")



<div class="jumbotron">
    <h1>Detail Post</h1>
</div>

<ul>

    <li style="list-style-type: none">

        <img style="width: 80%" src="{{asset('storage/posts/imageTest.png')}}">
        <br>

        <div style="width: 50%, heigth: 100px" class="jumbotron jumbotron-fluid">

            <p style="font-size: 50px">
                {{$post->description}}
            </p>
        </div>

    </li>
</ul>

@if (Auth::check())
<form class="" action="/posts/delete" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">
    <button type="submit" name="button" class="btn btn-danger">Delete Post</button>
</form>
@endif

@endsection

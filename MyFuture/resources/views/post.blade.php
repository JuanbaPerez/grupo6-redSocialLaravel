@extends('layout')

@section("title")
Posts
@endsection

@section("main")



<div class="jumbotron">
    <h1>Check our Posts</h1>
</div>

<ul>

    <li>
            {{$post->image}}
            {{$post->description}}

    </li>
</ul>


@endsection

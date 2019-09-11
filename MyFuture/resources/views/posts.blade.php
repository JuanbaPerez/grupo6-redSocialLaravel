@extends('layout')

@section("title")
Posts
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check our Posts</h1>
</div>

<ul>
    @forelse($posts as $post)

    <li>
        <a href="/post/{{$post->id}}">
            {{$post->description}}
        </a>
        <img src="/storage/{{$post->image}}" alt="">
    </li>

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

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

    <li>
        <a style="color: black" href="/post/{{$post->id}}">
            {{$post->description}}
        </a>
        <img style="width: 50%" src="{{asset('storage/posts/BQWf2foy4NWNChxkkDzwYd1ubZwFn7tQC4zeOCCb.jpeg')}}">
    </li> <br>

    @empty
    <p>
        There are no posts
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ol>


@endsection

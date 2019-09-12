@extends('layout')

@section("title")
Posts
@endsection

@section("main")



<div class="jumbotron">
    <h1>Check our Posts</h1>
</div>

<ul>

    <li style="list-style-type: none">

        <img style="width: 50%" src="{{asset('storage/posts/BQWf2foy4NWNChxkkDzwYd1ubZwFn7tQC4zeOCCb.jpeg')}}">
        <br>

        <p style="font-size: 50px">
            Pie de Post: {{$post->description}}
        </p>

    </li>
</ul>


@endsection

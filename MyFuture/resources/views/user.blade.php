@extends('layout')

@section("title")
User: {{$user->name}}
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check User {{$user->name}}</h1>
</div>

<ul>
    @forelse($user->posts as $post)

    <li>
        <a href="/user/ {{$post->id}}">
            {{$post->name}}
        </a>


    </li>

    @empty
    <p>
        User doesnt exists
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ul>


<a href="/users">
    <button class="btn btn-default" type="button" name="button">All Posts</button>
</a>

@endsection


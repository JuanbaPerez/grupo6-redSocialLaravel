@extends('layout')

@section("title")
Users
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check our Users</h1>
</div>

<ul>
    @forelse($users as $user)

    <li>
        <a href="/user/{{$user->id}}">
            {{$user->name}}
        </a>
    </li>

    @empty
    <p>
        There are no user
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ul>


@endsection



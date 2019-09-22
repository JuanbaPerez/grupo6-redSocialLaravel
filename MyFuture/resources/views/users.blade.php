@extends('layout')
@extends('layouts.app')

@section("title")
Users
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check our Users</h1>
</div>

<ul style="list-style-type: none">
    @forelse($users as $user)

    <li>
        <img style="width: 300px; margin-bottom: 10px; border-radius: 50%" class="profilePicture" src="{{asset('storage/mJG1PzYLEjNedOGHUIjvxyGqpoc3vXxLPWdVlv8i.png')}}">
        <a style="color: black" href="/user/{{$user->id}}">
            {{$user->userName}}
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

<br>

@endsection

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

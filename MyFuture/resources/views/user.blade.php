@extends('layout')

@section("title")
User: {{$user->name}}
@endsection

@section("main")

<div class="jumbotron">
    <h1>Check User {{$user->name}} <br>detail</h1>
</div>

<ul style="list-style-type:none; background-color: lightgrey; width: 50%; margin: 0 auto; border-radius: 15px; font-size: 30px">


    <li style="font-family: 'Cinzel Decorative', cursive">
        Usuario: {{$user->name}}
        <br>
        Nickname: {{$user->userName}}
        <br>
        Apellido: {{$user->lastName}}
        <br>
        Email: {{$user->email}}
        <br>
        Fecha de Nacimiento: {{$user->birthday}}



    </li>


</ul>


<a href="/users">
    <button class="btn btn-primary" type="button" name="button">All Users</button>
</a>

@endsection

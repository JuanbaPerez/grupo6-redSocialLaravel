@extends('layout')

@section("title")
Posts
@endsection

@section("main")



<div class="jumbotron">
    <h1>Detail Post</h1>
</div>

<ul>

    <li style="list-style-type: none">

        <img style="width: 50%" src="{{asset('storage/posts/LvG675j6XkyP2bNNFWEXOSM2J5gayKHyLxSC8o7f.jpeg')}}">
        <br>

        <div style="width: 50%, heigth: 100px" class="jumbotron jumbotron-fluid">

            <p style="font-size: 50px">
                {{$post->description}}
            </p>
        </div>

    </li>
</ul>


@endsection

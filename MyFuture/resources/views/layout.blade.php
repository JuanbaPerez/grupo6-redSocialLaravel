<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>
        @yield("title")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield("css")
    @yield("js")
</head>

<body>
    <div class="container">

        <header>
            <nav class="navbar navbar-expand-sm bg-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Users</a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/posts/add">Add a post</a>
                    </li>
                    @endif
                </ul>

                <form action="/search" method="get">
                    @csrf

                    <input class="form-control" type="text" name="search">
                    <button type="submit" name="button" class="btn btn-primary">Search</button>

                </form>


            <nav class="navbar navbar-expand-sm bg-dark">
                <ul class="navbar-nav">
                    @if (Auth::check())
                    <li class="nav-item">
                        Hello {{Auth::user()->name}}!
                    </li>
                    <img src="/storage/{{Auth::user()->avatar}}" alt="">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login">Login</a>
                    </li>
                    @endif

                </ul>


            </nav>
        </header>
        <main>
            @yield("main")

        </main>
        <footer>
            My Future 2019
        </footer>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>

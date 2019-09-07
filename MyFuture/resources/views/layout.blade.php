<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("title")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    @yield("css")
    @yield("js")
  </head>
  <body>
      <div class="container">
        <head>
          <nav>
            <ul>
              <li>
              <a href="/posts">Posts</a>
              </li>
              <li>
                <a href="/user">Profile</a>
              </li>
               @if (Auth::check())
                <li>
                  <a href="/posts/add">Add a post</a>
                </li>
              @endif
            </ul>
          </nav>
          <nav>
            <ul>
              @if (Auth::check())
                <li>
                  Hello {{Auth::user()->name}}
                </li>
                <li>
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
              @else
              <li>
                <a href="/register">Register</a>
              </li>
              <li>
                <a href="/login">Login</a>
              </li>
              @endif

            </ul>
          </nav>
        </head>
        <main>
          @yield("main")

        </main>
        <footer>
          My Future 2019
        </footer>
      </div>
  </body>
</html>

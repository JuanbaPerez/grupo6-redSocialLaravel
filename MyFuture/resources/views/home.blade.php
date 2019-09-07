@extends("layout")

@section("title")
Welcome!
@endsection


@section("main")
<div class="jumbotron">
  <h1>Welcome</h1>
  <h2>Check Posts</h2>
  <a href="/posts">
    <button class="btn btn-primary" type="button" name="button">Posts</button>
  </a>
</div>
@endsection

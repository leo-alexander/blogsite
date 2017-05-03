@extends('main')

@section('title', '| Home')

@section('content')
      <div class='row'>
        <div class='col-md-12'>
          <div class='jumbotron'>
            <h1>Welcome to Citified</h1>
            <p class='lead'>
              A blog exploring upcoming and proposed Urban Developments around Auckland
            </p>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-8'>

          @foreach($posts as $post)

          <div class='post'>
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 50 ? "..." : ""}}</p>
            <a href='{{ route('posts.show', $post->id) }}' class='btn btn-primary'>Read More</a>
            <hr/>
          </div>

          @endforeach

        </div>
        <div class='col-md-3 col-md-offset-1'>
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection

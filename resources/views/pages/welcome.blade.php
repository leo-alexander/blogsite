@extends('layouts.app')

@section('title', '| Home')

@section('content')
            <div class="content">
                <div class="title m-b-md col-md-8 col-md-offset-2">
                    <h2>Welcome to Citified</h2>
                </div>
                <h5 class='col-md-8 col-md-offset-2'>
                  A blog exploring upcoming and proposed Urban Developments around Auckland
                </h5>
                <div class='row'>
                  <div class='col-md-8 col-md-offset-2'>

                    @foreach($posts as $post)

                    <div class='post'>
                      <h3>{{ $post->title }}</h3>
                      <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 50 ? "..." : ""}}</p>
                      <a href='{{ route('posts.show', $post->id) }}' class='btn btn-primary'>Read More</a>
                      <hr/>
                    </div>

                    @endforeach

                  </div>
                </div>
            </div>
        </div>

    </body>
</html>

@endsection

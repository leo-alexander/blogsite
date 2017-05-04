@extends('layouts.app')

@section('title', '| Home')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Welcome to Citified
                </div>
                <p>
                  A blog exploring upcoming and proposed Urban Developments around Auckland
                </p>
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
                </div>
            </div>
        </div>

    </body>
</html>

@endsection

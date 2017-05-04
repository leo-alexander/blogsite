@extends('layouts.app')

@section('title', '| Post')

@section('content')

  <div class='row'>
    <div class='col-md-8 col-md-offest-2'>
      <h1>
        {{ $post->title }}
      </h1>
      <hr>
      <p>
        {{ $post->body }}
      </p>
    </div>
    <div class='col-md-4'>
      <div class='well'>
        <dl class='dl-horizontal'>
          <dt>Created:</dt>
          <dd>{{ date('M j, Y', strtotime($post->created_at)) }}</dd>
        </dl>
        <dl class='dl-horizontal'>
          <dt>Last Updated:</dt>
          <dd>{{ date('M j, Y', strtotime($post->updated_at)) }}</dd>
        </dl>
        <hr>

        @if (Auth::check())

          <div class='row'>
            <div class='col-sm-6'>
              {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
            </div>
            <div class='col-sm-6'>
              {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

              {!! Form::close() !!}
            </div>
          </div>

          @endif

      </div>

    </div>
  </div>

@endsection

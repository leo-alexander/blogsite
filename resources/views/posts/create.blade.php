@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')

@if (Auth::check())

  <div class='row'>
    <div class='col-md-8 col-md-offest-2'>
      <h1>Create New Post</h1>
      <hr>

      {!! Form::open(array('route' => 'posts.store')) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}

        {{ Form::label('body', "Post Body:") }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}

        {{ Form::submit('Create Post', array('class' => 'byn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
      {!! Form::close() !!}

    </div>
  </div>

  @else

  <h1>Not authorised</h1>

  @endif

@endsection

@extends('layouts.app')

@section('title', '| Edit')

@section('content')


@if (Auth::check())

  <div class='row'>
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class='col-md-8'>
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, ['class' => 'form-control']) }}
      <hr>
      {{ Form::label('body', 'Body:') }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}
      <hr>
    </div>
    <div class='col-md-4'>
      <div class='well'>
        <dl class='dl-horizontal'>
          <dt>Created:</dt>
          <dd>
            {{ $post->created_at }}
          </dd>
        </dl>
        <dl class='dl-horizontal'>
          <dt>
            Last Updated:
          </dt>
          <dd>
            {{ $post->updated_at }}
          </dd>
        </dl>
        <hr>
        <div class='row'>
          <div class='col-sm-6'>
            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class='col-sm-6'>
            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>

  @else

  <h1>Not authorised</h1>

  @endif

@endsection

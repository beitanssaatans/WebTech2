@extends('layouts.app')

@section('content')

	<h1>Edit post</h1>
	{!! Form::open(['action' => ['PostsController@update', $video->id], 'method'=>'POST']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $video->title,['class'=> 'form-control', 'placeholde'=>'Title'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', $video->body,['id' => 'ckeditor-textarea','class'=> 'form-control', 'placeholde'=>'Body Text'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
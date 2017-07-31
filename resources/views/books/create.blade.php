@extends('layouts.app')
@section('content')
<div class="container">
   @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<h1>Add New Book</h1>
			{!! Form::open(['action' => 'BookController@store']) !!}
				<div class="form-group">
					{!! Form::label('title', 'Title :') !!}
					{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('isbn', 'ISBN :') !!}
					{!! Form::text('isbn', null, ['class'=>'form-control', 'placeholder'=>'Enter IBN']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('description', 'Description :') !!}
					{!! Form::textarea('description', null,  ['class'=>'form-control', 'placeholder'=>'Description']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('author', 'Author name :') !!}
					{!! Form::text('author', null,  ['class'=>'form-control', 'placeholder'=>'Author Name']) !!}
				</div>
				<br>
				<div class="form-group">
					{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url('/book') }}">Back to Home</a></button>
				</div>
			{!! Form::close() !!}
			@if($errors->any())
				<ul class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>
</div>
@endsection
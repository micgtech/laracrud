@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<h1>Edit {{ $book->title }}</h1>
			{!! Form::model($book, ['route' => ['book.update', $book->id ], 'method'=>'PUT']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title :') !!}
                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('isbn', 'Title :') !!}
                {!! Form::text('isbn', null, ['class'=>'form-control', 'placeholder'=>'Enter ISBN']) !!}
                @if ($errors->has('isbn'))
                    <span class="help-block">
                        <strong>{{ $errors->first('isbn') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description :') !!}
                {!! Form::textarea('description', null,  ['class'=>'form-control', 'placeholder'=>'Description']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('author', 'Author name :') !!}
                {!! Form::text('author', null,  ['class'=>'form-control', 'placeholder'=>'Author Name']) !!}
                 @if ($errors->has('author'))
                    <span class="help-block">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url('/book') }}">Back to Home</a></button>            </div>

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
@extends('layouts.admin')

@section('content')

    <h1>Create Post </h1>

    <div class="row">
        {!! Form::open(['method'=>'POST' , 'action'=>'AdminPostsController@store' , 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title' , 'Title: ') !!}
            {!! Form::text('title' , null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id' , 'Category: ') !!}
            {!! Form::select('category_id' , [''=>'Choose Options'] + $categorys , null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id' , 'Photo') !!}
            {!! Form::file('photo_id' , null , ['class'=>'file'])  !!}
        </div>
        <div class="form-group">
            {!! Form::label('body' , 'body') !!}
            {!! Form::textarea('body' , null , ['class'=>'form-control'])  !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Crete Post' , ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    <div class="row">
        @if(count($errors) > 0 )
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection
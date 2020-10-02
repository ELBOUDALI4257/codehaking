@extends('layouts.admin')

@section('content')

    <h1>Update User </h1>

    <div class="row">

        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
            {!! Form::model( $user ,  ['method'=>'PATCH' , 'action'=>['AdminUsersController@update' , $user->id ], 'files'=>true]) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name' , 'Name : ') !!}
                {!! Form::text('name' , null , ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email' , 'Email : ') !!}
                {!! Form::email('email' , null , ['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id' , 'Role : ') !!}
                {!! Form::select('role_id' , [''=>'Choose Options'] + $roles, null , ['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active' , 'Status : ') !!}
                {!! Form::select('is_active' , array(1=>'Active' , 2=>'Not Active') , null , ['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('file' , 'Photo : ') !!}
                {!! Form::file('photo_id' , null , ['class'=>'form-control'])  !!}
            </div>
            <div class="form-group">
                {!! Form::label('password' , 'Password : ') !!}
                {!! Form::password('password' , null , ['class'=>'form-control'])  !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Crete User' , ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>



    {{--    desplay errors--}}
    <div class="row">
        @include('includes.form_error')
    </div>



@endsection
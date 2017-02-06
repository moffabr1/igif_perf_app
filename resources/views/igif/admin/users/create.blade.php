@extends('layouts.igif')
@section('page-header','Admin: Create New User')
@section('page-content')


    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">



        {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control'])!!}
        </div>


        {{--<div class="form-group">--}}
        {{--{!! Form::label('file', 'File:') !!}--}}
        {{--{!! Form::file('file', null, ['class'=>'form-control'])!!}--}}
        {{--</div>--}}

        <div class="form-group">
            {!! Form::label('photo_id', 'File:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>





        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}


        @include('includes.form_error')


    </div>
        </div>
    </div>


@stop
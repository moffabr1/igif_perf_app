@extends('layouts.igif')
@section('page-header','Admin: Edit Golf Course')
@section('page-content')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">

    <div class="row">

        <div class="col-sm-6">

            {!! Form::model($course, ['method'=>'PATCH', 'action'=> ['AdminCoursesController@update', $course->id],'files'=>true]) !!}

            {{--<div class="form-group">--}}
                {{--{!! Form::label('club_id', 'Club Id:') !!}--}}
                {{--{!! Form::label('club_id', null, ['class'=>'form-control'])!!}--}}

            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('course_name', 'Course Name:') !!}
                {!! Form::text('course_name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('holes', 'Number of Holes:') !!}
                {!! Form::text('holes', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('par', 'Course Par:') !!}
                {!! Form::text('par', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit Golf Course', ['class'=>'btn btn-primary col-sm-4']) !!}
            </div>


            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCoursesController@destroy', $course->id]]) !!}


            <div class="form-group">
                {!! Form::submit('Delete Golf Course', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
            </div>


            {!! Form::close() !!}



        </div>
    </div>


    <div class="row">

        @include('includes.form_error')

    </div>
            </div>
        </div>
    </div>

@stop

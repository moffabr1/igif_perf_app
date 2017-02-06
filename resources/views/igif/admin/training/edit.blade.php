@extends('layouts.dashboard')
@section('page_heading','Admin: Edit Drill')
@section('section')

    {{--*/ $media_path = '/training_media/' /*--}}

    <div class="row">


        <div class="col-sm-3">

            {{--<img src="{{$drill->media ? $media_path . $drill->media->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">--}}

        </div>

        <div class="col-sm-9">

        @if($category == "approach")

            {!! Form::model($drill, ['method'=>'PATCH', 'action'=> ['AdminTrainingController@update', $drill->id],'files'=>true]) !!}


            {{--<div class="form-group">--}}
                {{--{!! Form::label('name', 'Name:') !!}--}}
                {{--{!! Form::text('name', null, ['class'=>'form-control'])!!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('drill_category_id', 'Training Category:') !!}
                {!! Form::select('drill_category_id', $categories, null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('instructions', 'Instructions(optional):') !!}
                {!! Form::textArea('instructions', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('training_media_id', 'Training Media:') !!}
                {!! Form::file('training_media_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('attempts', 'Attempts:') !!}
                {!! Form::text('attempts', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('distance', 'Distance:') !!}
                {!! Form::text('distance', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
            {!! Form::label('length_id', 'Unit of Length:') !!}
            {!! Form::select('length_id', $lengths, null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('drill_level_id', 'Difficulty Level:') !!}
                {!! Form::select('drill_level_id', $levels, null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('max_pts_per_attempt', 'Max Pts per Attempt:') !!}
                {!! Form::text('max_pts_per_attempt', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('unit_of_score', 'Units of Score:') !!}
                {!! Form::text('unit_of_score', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('score_type', 'Score Type:') !!}
                {!! Form::text('score_type', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('lie', 'Lie:') !!}
                {!! Form::text('lie', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('success_proximity', 'Success Proximity:') !!}
                {!! Form::text('success_proximity', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('success_proximity_length', 'Unit of Length:') !!}
                {!! Form::select('success_proximity_length', $lengths, null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('objective', 'Objective:') !!}
                {!! Form::text('objective', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('scoring', 'Scoring:') !!}
                {!! Form::text('scoring', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('max_points', 'Max Points:') !!}
                {!! Form::text('max_points', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Training Drill', ['class'=>'btn btn-primary col-sm-4']) !!}
            </div>

            {!! Form::close() !!}

            {{--{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $drill->id]]) !!}--}}


            <div class="form-group">
                {!! Form::submit('Delete Training Drill', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
            </div>


            {!! Form::close() !!}
    @endif
    @if($category == "chipping")
                {!! Form::model($drill, ['method'=>'PATCH', 'action'=> ['AdminTrainingController@update', $drill->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('drill_category_id', 'Training Category:') !!}
                    {!! Form::select('drill_category_id', $categories, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('instructions', 'Instructions(optional):') !!}
                    {!! Form::textArea('instructions', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('training_media_id', 'Training Media:') !!}
                    {!! Form::file('training_media_id', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('scoring', 'Scoring:') !!}
                    {!! Form::textArea('scoring', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('chipping_distance_id', 'Distance:') !!}
                    {!! Form::select('chipping_distance_id', $chipping_distances, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('drill_level_id', 'Difficulty Level:') !!}
                    {!! Form::select('drill_level_id', $levels, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('unit_of_score', 'Units of Score:') !!}
                    {!! Form::text('unit_of_score', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('score_type', 'Score Type:') !!}
                    {!! Form::text('score_type', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('lie_id', 'Lie:') !!}
                    {!! Form::select('lie_id', $lies, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Training Drill', ['class'=>'btn btn-primary col-sm-4']) !!}
                </div>

                {!! Form::close() !!}

                {{--{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $drill->id]]) !!}--}}


                <div class="form-group">
                    {!! Form::submit('Delete Training Drill', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
                </div>


                {!! Form::close() !!}
    @endif

        </div>
    </div>


    <div class="row">

        @include('includes.form_error')

    </div>


@stop

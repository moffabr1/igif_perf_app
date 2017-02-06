@extends('layouts.dashboard')
@section('page_heading','Admin: Create Training Drills')
@section('section')

    <div class="col-sm-8">
        <div class="row">

            {!! Form::open(['method'=>'POST', 'action'=> 'AdminTrainingController@store','files'=>true]) !!}
            {{ Form::hidden('category_name') }}
            {{ Form::hidden('training_units_of_length_name') }}
            {{ Form::hidden('training_measurement_type_name') }}

            <div class="form-group">
                {!! Form::label('drill_category_id', 'Training Category:') !!}
                {{--{!! Form::select('drill_category_id', $categories, null, ['class'=>'form-control'])!!}--}}
                {!! Form::select('drill_category_id', ['' => 'Choose Drill Category'] + $categories, null, ['class'=>'form-control'])!!}

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
                {!! Form::label('drill_media_id', 'Training Media:') !!}
                {!! Form::file('drill_media_id', null, ['class'=>'form-control'])!!}
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
                {!! Form::select('length_id', ['' => 'Choose Options'] + $lengths, null, ['class'=>'form-control'])!!}

            </div>

            <div class="form-group">
                {!! Form::label('drill_level_id', 'Difficulty Level:') !!}
                {!! Form::select('drill_level_id', ['' => 'Choose Options'] + $levels, null, ['class'=>'form-control'])!!}

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
                {!! Form::label('lie_id', 'Lie:') !!}
                {{--{!! Form::text('lie', null, ['class'=>'form-control'])!!}--}}
                {{--{!! Form::select('lie_id', ['' => 'Choose Options'] + $lies, null, ['class'=>'form-control'])!!}--}}
                {!! Form::select('lie_id', ['' => 'Choose Options'] + $lies, null, ['class'=>'form-control'])!!}

            </div>

            <div class="form-group">
                {!! Form::label('success_proximity', 'Success Proximity:') !!}
                {!! Form::text('success_proximity', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('success_proximity_length', 'Unit of Length:') !!}
                {!! Form::select('success_proximity_length', ['' => 'Choose Options'] + $lengths, null, ['class'=>'form-control'])!!}
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
                {!! Form::submit('Create Training Drill', ['class'=>'btn btn-primary']) !!}
            </div>

        </div>
    </div>

    {!! Form::close() !!}


    @include('includes.form_error')

<script>
    $("select[name=training_categories_id]").change(function(){
        $cat = $( "#training_categories_id option:selected" ).text();
        $("input[name=category_name]").val($cat);
    });
    $("select[name=training_units_of_length_id]").change(function(){
        $cat = $( "#training_units_of_length_id option:selected" ).text();
        $("input[name=training_units_of_length_name]").val($cat);
    });
    $("select[name=training_measurement_type_id]").change(function(){
        $cat = $( "#training_measurement_type_id option:selected" ).text();
        $("input[name=training_measurement_type_name]").val($cat);
    });
</script>



    {{--<div class="form-group">--}}
        {{--{!! Form::label('training_categories_id', 'Training Category:') !!}--}}
        {{--{!! Form::select('training_categories_id', ['' => 'Choose Options'] + $categories, null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('instructions', 'Instructions(optional):') !!}--}}
        {{--{!! Form::textArea('instructions', null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('training_media_id', 'Training Media:') !!}--}}
        {{--{!! Form::file('training_media_id', null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('attempts', 'Attempts:') !!}--}}
        {{--{!! Form::text('attempts', null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('distance', 'Distance:') !!}--}}
        {{--{!! Form::text('distance', null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('training_units_of_length_id', 'Unit of Length:') !!}--}}
        {{--{!! Form::select('training_units_of_length_id', ['' => 'Choose Options'] + $unitsoflength, null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('training_measurement_type_id', 'Measurement Type:') !!}--}}
        {{--{!! Form::select('training_measurement_type_id', ['' => 'Choose Options'] + $measurementtypes, null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('success_criteria', 'Success Criteria:') !!}--}}
        {{--{!! Form::text('success_criteria', null, ['class'=>'form-control'])!!}--}}
    {{--</div>--}}


@stop

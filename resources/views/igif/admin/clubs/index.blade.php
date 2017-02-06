@extends('layouts.igif')
@section('page-header','Admin: Golf Courses Management')
@section('page-content')


    @if(Session::has('message'))
        <p class="{{session('message_style')}}">{{session('message')}}</p>
    @endif

    <div class="container">
        <div class="col-md-10">
        <table class="table table-striped">
            <thead>
            <tr>
                <td colspan="2">
                    <div align="left">
                    {{--<form action="http://contactmgr.dev/contacts" class="navbar-form navbar-right" role="search">--}}
                        {{--<form action="{{ route("igif.admin.clubs.index") }}" class="navbar-form navbar-right" role="search">--}}
                        <form action="{{ route("clubs.index") }}" class="navbar-form navbar-right" role="search">

                        <div class="input-group">
                                <input type="text" name="term" value="{{ Request::get("term") }}" class="form-control" placeholder="Search....." />
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </td>
                <td colspan="8" align="right">add club: <a href="{{route('clubs.create')}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus-sign" title="Add New Club"></i></a></td>
            </tr>
            <tr>
                <th>Id</th>
                <th>Club Name</th>
                <th>Holes</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Created</th>
                <th>Updated</th>

            </tr>
            </thead>
            <tbody>

            @if($clubs)

                @foreach($clubs->sortBy('club_name') as $club)

                    <tr>
                        <td>{{$club->id}}</td>
                        <td><a href="{{route('clubs.edit', $club->id)}}">{{$club->club_name}}</a></td>
                        {{--<td><a href="{{route('courses.edit', $course->id)}}">{{$course->course_name}}</a></td>--}}
                        {{--<td><a href="{{route('courses.edit', $club->course->id)}}">{{$club->course->course_name}}</a></td>--}}

                        <td>{{$club->number_of_holes}}</td>
                        <td>{{$club->address}}, {{$club->city_name}}, {{$club->state_province_name}} {{$club->postal_code}}, {{$club->country_name}}</td>
                        <td>
                            <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus-sign" title="Add New Club"></i></a>
                            <a href="{{route('clubs.edit', $club->id)}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit" title="Edit Club"></i></a>

                        </td>
                        <td>{{ ($club->created_at != null) ? $club->created_at->diffForHumans() : "No Date" }}</td>
                        <td>{{ ($club->updated_at != null) ? $club->updated_at->diffForHumans() : "No Date" }}</td>


                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>
    </div>
</div>

    <div class="text-center">
        <nav>
            {{--{!! $contacts->links() !!}--}}
            {!! $clubs->appends( Request::query())->render() !!}
        </nav>
    </div>
@stop
@section('footer-scripts')
    <script>
        $(function() {
            $("input[name=term]").autocomplete({
                source: "{{ route("igif.admin.clubs.autocomplete") }}",
                minLength: 3,
//				select: function(event, ui) {
//					$($this).val(ui.term.value);
//				}

            });

        });

    </script>
@stop

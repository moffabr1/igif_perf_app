@extends('layouts.dashboard')
@section('page_heading','Admin: Training Drills')
@section('section')


    @if(Session::has('message'))
        <p class="{{session('message_style')}}">{{session('message')}}</p>
    @endif

    <div class="container">
        <div class="col-md-10">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Training Drills
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#putting_drills" data-toggle="tab" aria-expanded="true">Putting Drills</a>
                        </li>
                        <li class=""><a href="#chipping_drills" data-toggle="tab" aria-expanded="false">Chipping Drills</a>
                        </li>
                        <li class=""><a href="#approach_drills" data-toggle="tab" aria-expanded="false">Approach Drills</a>
                        </li>
                        <li class=""><a href="#driving_drills" data-toggle="tab" aria-expanded="false">Driving Drills</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="putting_drills">
    <!-- BEGIN: Putting Drills Tab -->
                        putting drills
    <!-- END: Putting Drills Tab -->

                        </div>
                        <div class="tab-pane fade" id="chipping_drills">
    <!-- BEGIN: Chipping Drills Tab -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td colspan="2">
                                        <div align="left">
                                            {{--<form action="http://contactmgr.dev/contacts" class="navbar-form navbar-right" role="search">--}}
                                            {{--<form action="{{ route("igif.admin.training.index") }}" class="navbar-form navbar-right" role="search">--}}
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
                                </tr>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Lie</th>
                                    <th>Distance</th>
                                    {{--<th>Success Proximity</th>--}}
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--*/ $media_path = '/training_media/' /*--}}

                                @if($chipping_drills)

                                    @foreach($chipping_drills as $chipping_drill)

                                        <tr>
                                            <td>{{$chipping_drill->id}}</td>
                                            {{--<td><img height="50" src="{{$drill->media ? $media_path . $drill->media->file : 'http://placehold.it/140x100'}}" alt=""></td>--}}
                                            <td>{{$chipping_drill->category->name}}</td>
                                            {{--<td><a href="{{route('edit-drill', $chipping_drill->id)}}">{{$chipping_drill->name}}</a></td>--}}
                                            <td><a href="{{route('edit-drill', ['id' => $chipping_drill->id, 'category' => $chipping_drill->category->name])}}">{{$chipping_drill->name}}</a></td>
                                            <td>{{$chipping_drill->level->name}}</td>
                                            <td>{{$chipping_drill->lie->name}}</td>
                                            <td>{{$chipping_drill->chipping_distance->distance}}</td>
                                            {{--<td>{{$chipping_drill->success_proximity}} {{$chipping_drill->length->symbol}}</td>--}}
                                            <td>{{ ($chipping_drill->created_at != null) ? $chipping_drill->created_at->diffForHumans() : "No Date" }}</td>
                                            <td>{{ ($chipping_drill->updated_at != null) ? $chipping_drill->updated_at->diffForHumans() : "No Date" }}</td>
                                        </tr>

                                    @endforeach

                                @endif

                                </tbody>
                            </table>
                            <div class="text-center">
                                <nav>
                                    {!! $chipping_drills->fragment('chipping_drills')->appends(Request::query())->render() !!}
                                </nav>
                            </div>

    <!-- END: Chipping Drills Tab -->
                        </div>
                        <div class="tab-pane fade" id="approach_drills">
    <!-- BEGIN: Approach Drills Tab -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td colspan="2">
                                        <div align="left">
                                            {{--<form action="http://contactmgr.dev/contacts" class="navbar-form navbar-right" role="search">--}}
                                                {{--<form action="{{ route("igif.admin.training.index") }}" class="navbar-form navbar-right" role="search">--}}
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
                                </tr>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>attempts</th>
                                    <th>Distance</th>
                                    <th>Success Proximity</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--*/ $media_path = '/training_media/' /*--}}

                                @if($approach_drills)

                                    @foreach($approach_drills as $approach_drill)

                                        <tr>
                                            <td>{{$approach_drill->id}}</td>
                                            {{--<td><img height="50" src="{{$drill->media ? $media_path . $drill->media->file : 'http://placehold.it/140x100'}}" alt=""></td>--}}
                                            <td>{{$approach_drill->category->name}}</td>
                                            <td><a href="{{route('edit-drill', ['id' => $approach_drill->id, 'category' => $approach_drill->category->name])}}">{{$approach_drill->name}}</a></td>
                                            <td>{{$approach_drill->level->name}}</td>
                                            <td>{{$approach_drill->attempts}}</td>
                                            <td>{{$approach_drill->distance}} {{$approach_drill->unit_of_measure}}</td>
                                            <td>{{$approach_drill->success_proximity}} {{$approach_drill->length->symbol}}</td>
                                            <td>{{ ($approach_drill->created_at != null) ? $approach_drill->created_at->diffForHumans() : "No Date" }}</td>
                                            <td>{{ ($approach_drill->updated_at != null) ? $approach_drill->updated_at->diffForHumans() : "No Date" }}</td>
                                        </tr>

                                    @endforeach

                                @endif

                                </tbody>
                            </table>
                            <div class="text-center">
                                <nav>
                                    {!! $approach_drills->fragment('approach_drills')->appends(Request::query())->render() !!}
                                </nav>
                            </div>
                <!-- END: Approach Drills Tab -->
                        </div>
                        <div class="tab-pane fade" id="driving_drills">
                            <h4>Settings Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
    </div>


<script>
    $(function(){
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });
</script>



@stop

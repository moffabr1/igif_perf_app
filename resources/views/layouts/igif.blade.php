<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD Laravel">
    <meta name="author" content="Hector Dolo">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}">

    {{--<script src="{{ URL::asset('js/jquery.js') }}"></script>--}}
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>

    @yield('header-scripts')

</head>

<body id="wrapper">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                {{--<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>--}}
            {{--</a>--}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-fw"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">

                        <div class="input-group">
                            {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                    </div>
                </li>
                <li>
                    <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>


                <!-- /ADMIN Navigation -->

                @if($userData->role_id == 1)
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!-- /ADMIN:USERS Navigation -->
                            <li>
                                <a href="#">Users <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    {{--<li {{ (Request::is('*users') ? 'class="active"' : '') }}>--}}
                                    <li>
                                        <a href="{{ url ('admin/users') }}">Manage Users</a>
                                    </li>
                                    {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                                    <li>
                                        <a href="{{ url ('admin/users/create' ) }}">Create Users</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /END ADMIN:USERS Navigation -->
                            <!-- /ADMIN:CLUBS Navigation -->
                            <li>
                                <a href="#">Clubs <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('admin/clubs') }}">Manage Clubs</a>
                                    </li>
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('admin/clubs/create' ) }}">Create Club</a>
                                    </li>
                                    {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('igif/admin/courses') }}">Manage Courses</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                            <!-- /END ADMIN:CLUBS Navigation -->
                            <!-- /ADMIN:COURSES Navigation -->
                            <li>
                                <a href="#">Courses <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('igif/admin/clubs') }}">Manage Clubs</a>--}}
                                    {{--</li>--}}
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/courses') }}">Manage Courses</a>
                                    </li>
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/courses/create') }}">Create Courses</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /END ADMIN:COURSES Navigation -->
                            <!-- /ADMIN:SCORECARDS Navigation -->
                            <li>
                                <a href="#">Scorecards <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/scorecards') }}">Manage Scorecards</a>
                                    </li>
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/scorecards/create' ) }}">Create Scorecard</a>
                                    </li>
                                    {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('igif/admin/clubs/create' ) }}">Create Club</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                            <!-- /END ADMIN:SCORECARDS Navigation -->
                            <!-- /ADMIN:TRAINING Navigation -->
                            <li>
                                <a href="#">Training <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/training') }}">Manage Drills</a>
                                    </li>
                                    <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('igif/admin/training/create' ) }}">Create Drills</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /END ADMIN:TRAINING Navigation -->
                        </ul>
                    </li>
            @endif
            <!-- /END ADMIN Navigation -->
                <!-- /PLAYER:SCORES Navigation -->
                <li >
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Scores<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/scores') }}">View Scores</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/scorecards' ) }}">View Scorecards</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/scores/create' ) }}">Enter Scores</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <!-- /PLAYER:SCORES Navigation -->
                <!-- /PLAYER:STATS Navigation -->
                <li >
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stats<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>

                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats') }}">Dashboard</a>
                        </li>
                        {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                        {{--<a href="{{ url ('igif/player/stats') }}">Scores</a>--}}
                        {{--</li>--}}
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/scoring') }}">Scoring</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/tee') }}">Off the Tee</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/gir') }}">Greens in Regulation</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/putting') }}">Putting</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/proximity') }}">Proximity</a>
                        </li>
                        <li {{ (Request::is('*admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('igif/player/stats/scrambling') }}">Scrambling</a>
                        </li>
                        {{--<li {{ (Request::is('*admin') ? 'class="active"' : '') }}>--}}
                        {{--<a href="{{ url ('igif/player/scores/create' ) }}">Enter Scores</a>--}}
                        {{--</li>--}}
                        </li>
                        <!-- /PLAYER:STATS Navigation -->




            </ul>
        </div>
    </div>
</nav>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">@yield('page-header')</h3>
        </div>
    </div>

    @yield('page-content')

</div>
<!-- /#page-wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('js/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/sb-admin-2.js') }}"></script>

@yield('footer-scripts')

</body>
</html>

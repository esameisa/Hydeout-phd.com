<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title> Hydeout | @yield( 'title' )</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="stylesheet" href="{!! asset('dashboard/styles/vendor.css') !!}">
    <link rel="stylesheet" href="{!! asset('dashboard/styles/metronic.css') !!}">
    <link rel="stylesheet" href="{!! asset('dashboard/styles/main.css') !!}">

    <script src="{!! asset('dashboard/scripts/lib/modernizr/modernizr.js') !!}"></script>
    <script>function goBack() {
            window.history.back();
        }
    </script>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!--[if lt IE 10]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" upgrade your browser to improve your experience.</p>-->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner">
        <div class="page-logo"><a href="index.html"></a>Hydeout
            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <a href="javascript:;" data-toggle="collapse" data-target=".navbar-collapse"
           class="menu-toggler responsive-toggler"> </a>
        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user"><a href="javascript:;" data-toggle="dropdown"
                                                          data-hover="dropdown" data-close-others="true"
                                                          class="dropdown-toggle"><span
                                    class="username">{{ Auth::user()->name }} </span><i
                                    class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN HEADER & CONTENT DIVIDER-->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER-->
<!-- BEGIN CONTAINER-->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        @include( 'layouts.dashboard._sidebar' )
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT-->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY-->
        <div class="page-content">
            @if( \Session::has( 'success' ) )
                <div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-check"></i>{{ \Session::get( 'success' ) }}</h4>
                </div>
            @endif
            @if( \Session::has( 'error' ) )
                <div class="alert alert-danger alert-dismissible">
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{ \Session::get( 'error' ) }}
                </div>
            @endif
            @if( \Session::has( 'warning' ) )
                <div class="alert alert-warning alert-dismissible">
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{ \Session::get( 'warning' ) }}
                </div>
            @endif

        <!-- BEGIN PAGE HEADER-->
            <h1 class="page-title">
                @yield( 'slug' )
            </h1>
            @yield( 'content' )
        </div>
    </div>
</div>
<!-- BEGIN FOOTER-->
<footer class="page-footer">
    <div class="page-footer-inner">{!! date('Y') !!} © Made in robusta</div>
    <div class="scroll-to-top"><i class="icon-arrow-up"></i></div>
</footer>
<!-- END FOOTER-->
<script src="{!! asset('dashboard/scripts/lib/require.js') !!}"></script>
<script src="{!! asset('dashboard/scripts/config.js') !!}"></script>
<script src="{!! asset('dashboard/scripts/common.js') !!}"></script>
@yield('footerscripts')
</body>
</html>
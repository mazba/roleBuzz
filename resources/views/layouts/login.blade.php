<?php /**
 * Created by Mazba Kamal.
 * Date: 2/14/18
 * Time: 10:19 AM
 */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{config('sys.app_full_name')}}">
        <meta name="author" content="Coderthemes">
        {{--<link rel="shortcut icon" href="images/favicon_1.ico">--}}
        <title>{{config('sys.app_short_name')}} ({{config('sys.app_full_name')}})</title>
        <!-- Base Css Files -->
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('template/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('template/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('template/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('template/css/waves-effect.css') }}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('template/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('template/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        {{--notification--}}
        <link href="{{asset('template/assets/notifications/notification.css')}}" rel="stylesheet" />
        {{--custom--}}
        <link href="{{ asset('css/sys.css') }}" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="{{ asset('template/js/modernizr.min.js') }}"></script>
    </head>
    <body class="fixed-left">

        @yield('content')

        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="{{ asset('template/js/jquery.min.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/js/waves.js') }}"></script>
        <script src="{{ asset('template/js/wow.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('template/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('template/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('template/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('template/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('template/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

        <!-- sweet alerts -->
        <script src="{{ asset('template/assets/sweet-alert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('template/assets/sweet-alert/sweet-alert.init.js') }}"></script>
        <!-- Counter-up -->
        <script src="{{ asset('template/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('template/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        {{--Notification--}}
        <script src="{{ asset('template/assets/notifications/notify.min.js')}}"></script>
        <script src="{{ asset('template/assets/notifications/notify-metro.js')}}"></script>
        <script src="{{ asset('template/assets/notifications/notifications.js')}}"></script>
        <script src="{{ asset('template/assets/notifications/notifications.js')}}"></script>
        <!-- CUSTOM JS -->
        <script src="{{ asset('template/js/jquery.app.js') }}"></script>
        <script src="{{ asset('template/assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('template/assets/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/sys.js') }}"></script>
        @yield('scripts')
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                @if(Session::has('message'))
                    $.Notification.notify('black','right-bottom',"{{__('Message')}}","{{ Session::get('message') }}")
                @endif
                @if(!empty($errors->all()))
                    $.Notification.notify('error','right-bottom',"{{__('Error')}}","{{ implode(' | ',$errors->all()) }}")
                @endif
            });
        </script>
    </body>
</html>
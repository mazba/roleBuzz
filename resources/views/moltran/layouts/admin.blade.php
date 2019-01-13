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
    <title>{{config('sys.app_full_name')}}</title>
    <!-- Base Css Files -->
    <link href="{{ asset('template/moltran/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('template/moltran/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/moltran/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/moltran/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('template/moltran/css/animate.css') }}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('template/moltran/css/waves-effect.css') }}" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('template/moltran/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('template/moltran/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/moltran/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/moltran/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    {{--notification--}}
    <link href="{{asset('template/moltran/assets/notifications/notification.css')}}" rel="stylesheet" />
    <link href="{{asset('template/moltran/assets/select2/select2.css')}}" rel="stylesheet" />
    {{--custom--}}
    <link href="{{ asset('css/sys.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('template/moltran/js/modernizr.min.js') }}"></script>
</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
@include('admin.include.header')
@include('admin.include.sidebar')
<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div> <!-- container -->
        </div> <!-- content -->
        <footer class="footer text-right">
            {{date('Y')}} © {{config('sys.app_short_name')}}.
        </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="#" alt="">--}}
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-2.jpg" alt="">--}}
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-3.jpg" alt="">--}}
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-4.jpg" alt="">--}}
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-5.jpg" alt="">--}}
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-6.jpg" alt="">--}}
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-7.jpg" alt="">--}}
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-8.jpg" alt="">--}}
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-9.jpg" alt="">--}}
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            {{--<img src="images/users/avatar-10.jpg" alt="">--}}
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="{{ asset('template/moltran/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/moltran/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/moltran/js/waves.js') }}"></script>
<script src="{{ asset('template/moltran/js/wow.min.js') }}"></script>
<script src="{{ asset('template/moltran/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/moltran/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('template/moltran/assets/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ asset('template/moltran/assets/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('template/moltran/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('template/moltran/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

<!-- sweet alerts -->
<script src="{{ asset('template/moltran/assets/sweet-alert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('template/moltran/assets/sweet-alert/sweet-alert.init.js') }}"></script>
<!-- Counter-up -->
<script src="{{ asset('template/moltran/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/moltran/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
{{--Notification--}}
<script src="{{ asset('template/moltran/assets/notifications/notify.min.js')}}"></script>
<script src="{{ asset('template/moltran/assets/notifications/notify-metro.js')}}"></script>
<script src="{{ asset('template/moltran/assets/notifications/notifications.js')}}"></script>
<script src="{{ asset('template/moltran/assets/notifications/notifications.js')}}"></script>
<!-- CUSTOM JS -->
<script src="{{ asset('template/moltran/js/jquery.app.js') }}"></script>
<script src="{{ asset('template/moltran/assets/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/moltran/assets/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('template/moltran/assets/select2/select2.min.js') }}" type="text/javascript"></script>
<!-- Modal-Effect -->
<script src="{{ asset('template/moltran/assets/modal-effect/js/classie.js') }}"></script>
<script src="{{ asset('template/moltran/assets/modal-effect/js/modalEffects.js') }}"></script>
<link href="{{ asset('template/moltran/assets/modal-effect/css/component.css') }}" rel="stylesheet">
<script src="{{ asset('js/sys.js') }}"></script>
@include('admin.include.jq')
@yield('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        @if(!empty($errors->all()))
        $.Notification.notify('error','right-bottom',"{{__('Error')}}","{{ implode(' | ',$errors->all()) }}")
        @elseif(\Session::has('success'))
        $.Notification.notify('success','right-bottom',"{{__('Success')}}","{{ session('success') }}")
        @elseif(\Session::has('error'))
        $.Notification.notify('error','right-bottom',"{{__('ERROR')}}","{{ session('error') }}")
                @endif
        var activeChild = $('#sidebar-menu').find('li.active').parentsUntil('#sidebar-menu');
        $.each(activeChild,function(item,index){
            if($(index).is('li')){
                $(index).children().addClass('active')
                $(index).addClass('active');
            }
            if($(index).is('ul'))
                $(index).css({display:'block'})
        });
    });
</script>
</body>
</html>
@extends('layouts.admin')
@section('content')

    <?php
//    var_dump(Session::has('errors'));
//    var_dump(Session::all());
//            $rr = Session::get('errors');
//    var_dump($rr);
//    die;
//    if(is_array(Session::get('errors')))
//        print_r(array_values(Session::get('errors')));
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">{{__('New User Group')}}</h3></div>
                <div class="panel-body row">
                    {!! Form::open(['action' => 'UserGroupsController@store']) !!}
                    @include('admin.UserGroups.form',['submit'=>__('Save')])
                    {{ Form::close() }}
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div>
@endsection
@section('scripts')
@endsection
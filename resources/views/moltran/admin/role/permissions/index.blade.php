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
      <div class="panel-heading">
        <h3 class="panel-title">{{__('Permission Management')}}
          <a href="{{route('create_group')}}" title="New Permission Group" class="panel-title-btn btn btn-icon waves-effect waves-light btn-success m-b-5 pull-right"> <i class="ion-plus-circled"></i> </a>
        </h3>
      </div>
      <div class="panel-body row">
        <table class="table table-hover">
          <thead>
          <tr>
            <th>#</th>
            <th>{{__('Group Name')}}</th>
            <th>{{__('Created')}}</th>
            <th>{{__('Updated')}}</th>
            <th>{{__('Action')}}</th>
          </tr>
          </thead>
          <tbody>
            @foreach($users as $key=>$user)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['updated_at']}}</td>
                <td>
                  <a href="{{ route('build_permission',$user['id']) }}" class="btn btn-icon waves-effect waves-light btn-default m-b-5"> <i class="fa fa-wrench"></i> </a>
                  <a href="{{ route('permissions') }}" class="btn btn-icon waves-effect waves-light btn-default m-b-5"> <i class="ion-information-circled"></i> </a>
                  {{--<div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"> set <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">{{__('Manage Permission')}}</a></li>
                      <li><a href="#">{{__('View Permission')}}</a></li>
                    </ul>
                  </div>--}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- panel-body -->
    </div> <!-- panel -->
  </div> <!-- col-->
</div>
@endsection
@section('scripts')
@endsection
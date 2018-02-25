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
        <h3 class="panel-title">{{__('User Groups')}}
          <a href="{{route('usr-groups.create')}}" title="Add New" class="panel-title-btn btn btn-icon waves-effect waves-light btn-success m-b-5 pull-right"> <i class="ion-plus-circled"></i> </a>
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
          </tr>
          </thead>
          <tbody>
            @foreach($users as $key=>$user)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['updated_at']}}</td>
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
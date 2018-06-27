@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{__('Menu Management')}}
            <a href="{{route('menu.create')}}" title="New Menu" class="panel-title-btn btn btn-icon waves-effect waves-light btn-success m-b-5 pull-right"> <i class="ion-plus-circled"></i> </a>
        </h3>
      </div>
      <div class="panel-body row">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>{{__('Parent')}}</th>
              <th>{{__('Title')}}</th>
              <th>{{__('Alternative Title')}}</th>
              <th>{{__('Icon')}}</th>
              <th>{{__('Description')}}</th>
              <th>{{__('Status')}}</th>
              <th>{{__('Action')}}</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $number = ($menu->currentPage() * $menu->perPage() ) - ($menu->perPage() - 1 );
          ?>
            @foreach($menu as $key=>$item)
              <tr>
                <td>{{ $number++ }}</td>
                <td>{{$item['parent']['title']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item['alt_title']}}</td>
                <td><i class="{{$item['icon']}}"></i></td>
                <td>{!! readMoreString($item['description']) !!}</td>
                <td>{{$item['status']==1?'Active':'In-Active'}}</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $menu->appends(request()->except('page'))->links() }}
      </div><!-- panel-body -->
    </div> <!-- panel -->
  </div> <!-- col-->
</div>
@endsection
@section('scripts')
@endsection
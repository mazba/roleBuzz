<?php /**
 * Created by Mazba.
 * User: mazba
 * Date: 2/25/18
 * Time: 2:21 PM
 */?>
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
            <div class="panel panel-default permission-builder">
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('Permission Management')}}
                        <a href="{{route('permissions')}}" title="Back" class="panel-title-btn btn btn-icon waves-effect waves-light btn-warning m-b-5 pull-right"> <i class="ion-arrow-return-left"></i> </a>
                    </h3>
                </div>
                <div class="panel-body">
                    <h2 class="text-center">{{$group['name']}}</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="no-sort">
                                            <div class="checkbox checkbox-circle">
                                                <input id="check-all" type="checkbox">
                                                <label for="check-all"></label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Uri</th>
                                        <th>Head</th>
                                        <th>Middleware</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($routes as $k=>$route)
                                        <?php
//                                        if(isset($route->action['as']))
//                                            $path = $route->action['as'];
//                                        elseif(isset($route->methods))
//                                            $path = $route->uri.'/'.implode(',',$route->methods);
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-circle">
                                                    <input class="route" id="{{$k}}" type="checkbox" name="routes[{{$k}}][as]" value="{{isset($route->action['as'])?$route->action['as']:''}}">
                                                    <label for="{{$k}}"></label>
                                                </div>
                                                <input type="hidden" name="routes[{{$k}}][uri]" value="{{$route->uri}}"/>
                                                <input type="hidden" name="routes[{{$k}}][http_verbs]" value="{{implode(',',$route->methods)}}"/>
                                            </td>
                                            <td class="text-center"><?= isset($route->action['as'])?$route->action['as']:'<i class="fa fa-close"></i>'?></td>
                                            <td>{{$route->uri}}</td>
                                            <td>{{isset($route->methods)?implode(',',$route->methods):''}}</td>
                                            <td>
                                                @if(isset($route->action['middleware']))
                                                    {{is_array($route->action['middleware'])?implode(',',$route->action['middleware']):$route->action['middleware']}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{--<ul class="list-group no-margn nicescroll todo-list" >
                            @foreach($routes as $k=>$route)
                                <li class="list-group-item">
                                    <div class="checkbox checkbox-primary">
                                        <input class="todo-done" id="{{$k}}" type="checkbox" checked="">
                                        <label for="{{$k}}">{{$route->uri}}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>--}}
                    </div>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div>
@endsection
@section('scripts')
    <script type="application/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable({
                paging:false,
                "order": [],
                "columnDefs": [{
                    "targets"  : 'no-sort',
                    "orderable": false
                }]
            });
            $('#check-all').click(function(){
                if($('.route').is(':checked'))
                    $('.route').prop('checked',false);
                else
                    $('.route').prop('checked',true);

            });
        });
    </script>
    <style>
        .permission-builder .panel-body h2{
            border-bottom: 1px solid #f0f0f0;
            color: #989898;
        }
    </style>
@endsection

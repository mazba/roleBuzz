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
                    <h2 class="text-center">User Group : {{$group['name']}}</h2>
                    <div class="row">
                        {!! Form::open(['action' => ['Admin\Role\PermissionsController@setPermission',$id]]) !!}
                        <div class="col-md-12">
                            {{ Form::button(__('SAVE ROLE').' <i class="md md-done-all"></i> ',['type'=>'submit','class'=>'btn btn-block btn-danger waves-effect waves-light'])}}
                        </div>
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
                                        $c = collect($user_group_permissions);
                                        $checked = $c->search(function ($item,$key) use($route){
                                            return (isset($route->action['as'])&&$route->action['as']==$item['as'])||
                                            ($route->uri==$item['uri']&&implode(',',$route->methods)==$item['http_verbs']);
                                        });
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-circle">
                                                    <input {{$checked!==false?'checked':''}} class="route" id="{{$k}}" type="checkbox" name="routes[{{$k}}][checked]" value="1">
                                                    <label for="{{$k}}"></label>
                                                </div>
                                                <input type="hidden" name="routes[{{$k}}][as]" value="{{isset($route->action['as'])?$route->action['as']:''}}"/>
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
                        {{ Form::close() }}
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
            $(document).on('submit','form',function (e) {
                $('#datatable_filter').find('input').val('');
                $('#datatable_filter').find('input').trigger('keyup');
            });
            $('#check-all').click(function(){
                $('.route').prop('checked',this.checked);
            });
        });
    </script>
    <style>
        .permission-builder .panel-body h2{
            border-bottom: 1px solid #f0f0f0;
            color: #7b7b7b;
        }
        #datatable_filter input{
            margin-top: 19px;
        }
    </style>
@endsection

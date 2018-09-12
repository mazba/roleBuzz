@extends('layouts.login')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{__('Register New User')}}</h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['action' => 'Auth\RegisterController@create']) !!}
                    <div class="form-group">
                        {{ Form::label('sys_group_id', __('Group')) }}
                        {{ Form::select('sys_group_id', $groups,null,['placeholder'=>__('Select'),'class'=>'form-control']) }}
                        @if($errors->has('sys_group_id'))
                            <label id="name-error" class="error" for="name">{{ $errors->first('sys_group_id') }}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('username', __('Username')) }}
                        {{ Form::text('username',null,['class'=>'form-control']) }}
                        @if($errors->has('username'))
                            <label id="name-error" class="error" for="name">{{ $errors->first('username') }}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', __('Password')) }}
                        {{ Form::text('password',null,['class'=>'form-control']) }}
                        @if($errors->has('password'))
                            <label id="name-error" class="error" for="name">{{ $errors->first('password') }}</label>
                        @endif
                    </div>
                    <div class="form-group">
                        {{ Form::button(isset($submit)?$submit:__('Submit'),['type'=>'submit','class'=>'pull-right btn btn-info waves-effect waves-light w-md m-b-5'])}}
                    </div>
                    {{ Form::close() }}
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div>
@endsection

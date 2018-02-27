@extends('layouts.login')

@section('content')
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-heading bg-img">
                <div class="bg-overlay"></div>
                <h3 class="text-center m-t-10 text-white"> Sign In to <strong>RoleBuzz</strong> </h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['action' => 'Auth\LoginController@login','class'=>'form-horizontal m-t-20']) !!}
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input name="username" class="form-control input-lg " type="text" required="" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="password" class="form-control input-lg" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href=""><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="">Create an account</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>
@endsection

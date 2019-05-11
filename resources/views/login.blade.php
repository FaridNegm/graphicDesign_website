
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body" style="width:100%;margin:0px auto;background-color:#FFF;">
                        <div class="panel-heading" id="heading_form">Login</div>
                        <form class="form-group" id="form" role="form" method="POST" action="{{ url('/login') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-12">{{--div first col--}}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class="col-md-6 col-sm-push-3">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                        @if ($errors->has('email'))
                                            <div class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">{{--div first col--}}
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <div class="col-md-6 col-sm-push-3">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <div class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">{{--div first col--}}

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-push-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">{{--div first col--}}
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-push-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-sign-in"></i> Login
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">{{--div first col--}}
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-push-3">
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

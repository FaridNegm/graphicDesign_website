@extends('dashboard.app')

@section('title')
        Edit User
@endsection

@section('header')
    <style>
        .title{
            font-size: 300px;
        }
        .icon_title{
            opacity: .3;
            position: relative;
            left: 20%;
            top: -25px;
            font-size: 35px;
            color: #538cd2;
        }
        @media screen and (max-width: 600px) {
            .breadcrumb {
                float: left;
                margin-left: 48px;
            }
        }
        label{
            font-size: 15px;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        <!-- top Navbar -->
    @include('dashboard.topnav')
    <!-- end top navbar -->

        <!-- left Navbar -->
    @include('dashboard.navleft')
    <!-- end top Navbar -->

        <!-- Content Wrapper. Contains page content -->
        @foreach($edit_users as $user)

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="background-color: #FFF; width: 90%;margin: 0px auto;padding: 30px 20px 20px;">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;">
                                <img src="{{url('dashboard/images/users/'.$user->image)}}" class="img-responsive" style="width: 70px;height: 70px;border-radius: 50%;"/>
                                Edit User: {{$user->name}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">Edit User</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 90%;margin: 0px auto;padding: 30px 10px 20px;">
                                <div class="col-md-6 pull-left">
                                    <form method="post" action="{{url('users/update/'.$user->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <span class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Username">

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="admin">Admin</label>
                                                <select value="{{old('admin')}}" name="admin"  id="admin" class="form-control">
                                                    <option value="1" selected="selected">Admin</option>
                                                    <option value="0" >User</option>
                                                </select>

                                                @if ($errors->has('admin'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('admin') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="facebook">Facebook</label>
                                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{ $user->facebook }}" placeholder="facebook">

                                                @if ($errors->has('facebook'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('facebook') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="twitter">Twitter</label>
                                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{ $user->twitter }}" placeholder="twitter">

                                                @if ($errors->has('twitter'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('twitter') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('instegram') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="instegram">Instegram</label>
                                                <input id="instegram" type="text" class="form-control" name="instegram" value="{{ $user->instegram }}" placeholder="instegram">

                                                @if ($errors->has('instegram'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('instegram') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group">
                                            <span class="col-md-4">
                                                <input type="submit" Value="Register" class="form-control btn btn-primary"  style="width:60%;display:block;margin:0px auto 50px auto;height:45px;background-color: #24a2b7;border: 0px;"/>
                                            </span>
                                        </span>
                                    </form> {{--end form 1--}}
                                </div>{{--end div first col--}}

                                <div class="col-md-6 pull-right">{{--start div first col--}}

                                    <form method="post" action="{{url('users/update/'.$user->id)}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <span class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                                                <span class="col-md-4">
                                                    <label for="old_password">Old Password</label>
                                                    <input id="old_password" type="password" class="form-control password" name="old_password" placeholder="Old Password">
                                                    <span style="position: absolute;top: -40px;right: -360px;opacity: .5;font-size: 20px;cursor: pointer;"><i class="fa fa-eye eye"></i></span>

                                                    @if ($errors->has('old_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('old_password') }}</strong>
                                                        </span>
                                                    @endif
                                                </span>
                                            </span>

                                            <span class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                                <span class="col-md-4">
                                                    <label for="new_password">New Password</label>
                                                    <input id="new_password" type="password" class="form-control password" name="new_password" placeholder="New Password">
                                                    <span style="position: absolute;top: -40px;right: -360px;opacity: .5;font-size: 20px;cursor: pointer;"><i class="fa fa-eye eye"></i></span>
                                                    @if ($errors->has('new_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('new_password') }}</strong>
                                                        </span>
                                                    @endif
                                                </span>
                                            </span>

                                            <span class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                                <span class="col-md-4">
                                                    <label for="image">Image</label>
                                                    <input id="image" type="file" class="form-control" name="image" value="{{ url('dashboard/images/users/'.$user->image) }}" placeholder="Username" style="height: 38px;line-height: 18px;">

                                                    @if ($errors->has('image'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('image') }}</strong>
                                                        </span>
                                                    @endif
                                                </span>
                                            </span>

                                            <span class="form-group">
                                                <span class="col-md-4">
                                                    <input type="submit" Value="Change" class="form-control btn btn-success"  style="width:60%;display:block;margin:0px auto 50px auto;height:45px;border: 0px;"/>
                                                </span>
                                            </span>
                                    </form> {{--end form 2--}}
                                </div> {{--end div second col--}}

                            {{-- second form to change image and password --}}

                            </div>
                        </div><!-- content -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
        </div><!-- /.content header -->
        @endforeach
        <!-- /.content-wrapper -->

    @include('dashboard/footer')
    <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            $(".eye").mouseover(function () {
                if($("#new_password , #old_password").attr('type' , 'password')){
                    $("#new_password , #old_password").attr('type' , 'text');
                }
            });

            $(".eye").mouseleave(function () {
                if($("#new_password , #old_password").attr('type' , 'text')){
                    $("#new_password , #old_password").attr('type' , 'password');
                }
            });

        });
    </script>
@endsection

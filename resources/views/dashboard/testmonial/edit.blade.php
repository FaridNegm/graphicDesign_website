@extends('dashboard.app')

@section('title')
        Edit Testmonials
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
        @foreach($edit_testmonial as $test)

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="background-color: #FFF; width: 90%;margin: 0px auto;padding: 30px 20px 20px;">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;">
                                <img src="{{url('dashboard/images/testmonials/'.$test->image)}}" class="img-responsive" style="width: 70px;height: 70px;border-radius: 50%;"/>
                                Edit: {{str_limit($test->title , 30)}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">Edit Testmonials</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 90%;margin: 0px auto;padding: 30px 10px 20px;">
                            <form method="post" action="{{url('testmonial/update/'.$test->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-md-6 pull-left">
                                    {{ csrf_field() }}
                                    <span class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                        <span class="col-md-4">
                                            <label>Title</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ $test->title }}" placeholder="Title...">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </span>
                                    </span>

                                    <span class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">

                                        <span class="col-md-4">
                                            <label>Description</label>
                                            <textarea id="body" class="form-control" name="body" rows="5" placeholder="Description ......">{{ $test->body }}</textarea>
                                            @if ($errors->has('body'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('body') }}</strong>
                                                </span>
                                            @endif
                                        </span>
                                    </span>

                                </div>{{--end div first col--}}

                                <div class="col-md-6 pull-right">{{--start div first col--}}

                                    <span class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

                                            <span class="col-md-4">
                                                <label>Image</label>
                                                <input id="image" type="file" class="form-control" name="image" value="{{$test->image}}" style="height: 38px; line-height: 18px;">

                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                    </span>

                                    <span class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">

                                            <span class="col-md-4">
                                                <label>Status</label>
                                                <select name="status"  id="status" class="form-control">
                                                    <option value="{{$test->status}}" selected="selected">{{$test->status == '1'? 'Active' : 'Not Active'}}</option>
                                                    <option value="1">Active</option>
                                                    <option value="0" >Not Active</option>
                                                </select>

                                                @if ($errors->has('status'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                    </span>
                                </div>{{--end div first col--}}

                                <span class="form-group">
                                    <span class="col-md-4">
                                        <input type="submit" Value="Register" class="form-control btn btn-primary"  style="width:60%;display:block;margin:0px auto 50px auto;height:45px;background-color: #24a2b7;border: 0px;"/>
                                    </span>
                                </span>

                            </form>

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

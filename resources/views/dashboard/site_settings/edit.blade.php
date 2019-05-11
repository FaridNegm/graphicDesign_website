@extends('dashboard.app')

@section('title')
    Edit Site Settings
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
        @foreach($edit_site_setting as $setting)

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="background-color: #FFF; width: 90%;margin: 0px auto;padding: 30px 20px 20px;">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;">
                                <img src="{{url('dashboard/images/sitesetting/'.$setting->site_image)}}" class="img-responsive" style="width: 70px;height: 70px;border-radius: 50%;"/>
                                {{$setting->name}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">Edit Site Settings</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 90%;margin: 0px auto;padding: 30px 10px 20px;">
                                <form method="post" action="{{url('all-settings/update/'.$setting->name)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-md-6 pull-left">
                                        <span class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control" name="name" value="{{ $setting->name }}" placeholder="Username">

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="desc">Description</label>
                                                <textarea id="desc" type="text" class="form-control" name="desc" rows="5">{{ $setting->description }}</textarea>

                                                @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ $setting->email }}" placeholder="Email">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('phones') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="phones">Phones</label>
                                                <input id="phones" type="text" class="form-control" name="phones" value="{{ $setting->phones }}" placeholder="phones">

                                                @if ($errors->has('phones'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phones') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="fax">Address</label>
                                                <input id="address" type="text" class="form-control" name="address" value="{{ $setting->address }}" placeholder="address">

                                                @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                    </div>{{--end div first col--}}

                                    <div class="col-md-6 pull-right">{{--start div first col--}}

                                        <span class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="fax">Fax</label>
                                                <input id="fax" type="text" class="form-control" name="fax" value="{{ $setting->fax }}" placeholder="fax">

                                                @if ($errors->has('fax'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fax') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="image">Image</label>
                                                <input id="image" type="file" class="form-control" name="image" value="{{ url('dashboard/images/users/'.$setting->site_image) }}" placeholder="Username" style="height: 38px;line-height: 18px;">

                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="facebook">Facebook</label>
                                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}" placeholder="facebook">

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
                                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}" placeholder="twitter">

                                                @if ($errors->has('twitter'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('twitter') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('youtube') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="youtube">Youtube</label>
                                                <input id="youtube" type="text" class="form-control" name="youtube" value="{{ $setting->youtube }}" placeholder="youtube">

                                                @if ($errors->has('youtube'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('youtube') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                        <span class="form-group{{ $errors->has('behance') ? ' has-error' : '' }}">
                                            <span class="col-md-4">
                                                <label for="behance">Behance</label>
                                                <input id="behance" type="text" class="form-control" name="behance" value="{{ $setting->behance }}" placeholder="behance">

                                                @if ($errors->has('behance'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('behance') }}</strong>
                                                    </span>
                                                @endif
                                            </span>
                                        </span>

                                    </div> {{--end div second col--}}

                                    <span class="form-group">
                                        <span class="col-md-4">
                                            <input type="submit" Value="Save Change" class="form-control btn btn-success"  style="width:60%;display:block;margin:0px auto 50px auto;height:45px;border: 0px;background-color: #24a2b7"/>
                                        </span>
                                    </span>
                                </form> {{--end form 1--}}
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

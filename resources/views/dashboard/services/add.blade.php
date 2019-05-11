@extends('dashboard.app')

@section('title')
    Add New Service
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid" style="background-color: #FFF; width: 90%;margin: 0px auto;padding: 30px 20px 20px;">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;"><i class="fa fa-angellist icon_title"></i> Add New Service</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">Add New Service</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 90%;margin: 0px auto;padding: 30px 10px 20px;">
                            <form method="post" action="{{url('add-new-service')}}" enctype="multipart/form-data">
                                @include('dashboard.services.form')
                            </form>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
        </div>
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
                if($("#password , #password-confirm").attr('type' , 'password')){
                    $("#password , #password-confirm").attr('type' , 'text');
                }
            });

            $(".eye").mouseleave(function () {
                if($("#password , #password-confirm").attr('type' , 'text')){
                    $("#password , #password-confirm").attr('type' , 'password');
                }
            });

        });
    </script>

@endsection

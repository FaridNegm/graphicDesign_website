@extends('dashboard.app')

@section('title')
    Site Settings
@endsection

@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('dashboard')}}/plugins/datatables/dataTables.bootstrap4.min.css">

    <style>
        .title{
            font-size: 300px;
        }
        .icon_title{
            opacity: .3;
            position: relative;
            left: 15%;
            top: -20px;
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
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;"><i class="fa fa-cog icon_title"></i> Site Settings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">Site Settings</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 100%;margin: 0px auto;padding: 30px 10px 20px;">
                            <div class="card-body">
                                <table id="table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>IMAGE</th>
                                        <th>EMAIL</th>
                                        <th>ADDRESS</th>
                                        <th>FAX</th>
                                        <th>PHONES</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($all_settings as $setting)
                                        <tr>
                                            <td>{{$setting->name}}</td>
                                            <td>
                                                <img src="{{url('dashboard/images/sitesetting/'.$setting->site_image)}}" class="img-responsive" style="width: 50px;height: 50px;border-radius: 50%;"/>
                                            </td>
                                            <td>{{$setting->email}}</td>
                                            <td>{{$setting->address}}</td>
                                            <td>{{$setting->fax}}</td>
                                            <td>{{$setting->phones}}</td>
                                            <td>
                                                <a href="{{url('all-settings/edit/'.$setting->name)}}" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    <!-- DataTables -->
    <script src="{{url('dashboard')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('dashboard')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                "paging": false,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });

        $('.delete').click(function () {
            if(confirm('Are Youe Sure To Want Delete This User?') != true){
                return false;
            }
        });
    </script>

@endsection

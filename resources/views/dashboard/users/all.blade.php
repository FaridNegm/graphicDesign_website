@extends('dashboard.app')

@section('title')
    All Users
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
                            <h1 class="m-0 text-dark" style="font-family: Comfortaa;font-size: 20px;"><i class="fa fa-users icon_title"></i> All Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('adminpanel')}}">Home</a></li>
                                <li class="breadcrumb-item active">All Users</li>
                            </ol>
                        </div><!-- /.col -->

                        <div style="width: 100%;margin: 0px auto;padding: 30px 10px 20px;">
                            <div class="text-center"><a class="btn btn-primary" href="{{url('users/add-new-user')}}"><i class="fa fa-plus"></i> Add New User</a></div>
                            <div class="card-body">
                                <table id="table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>IMAGE</th>
                                        <th>EMAIL</th>
                                        <th>STATUS</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($all_users as $user)
                                    <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>
                                                <img src="{{url('dashboard/images/users/'.$user->image)}}" class="img-responsive" style="width: 50px;height: 50px;border-radius: 50%;"/>
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @if($user->status == 1)
                                                    <button class="btn btn-dark" style="width: 85px;"><i class="fa fa-key"></i>  Admin</button>
                                                @else
                                                    <button class="btn btn-default" style="width: 85px;"><i class="fa fa-user"></i>  User</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('users/edit/'.$user->id)}}" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                                <a href="{{url('users/delete/'.$user->id)}}" class="btn btn-danger delete"><i class="fa fa-trash"></i> </a>
                                            </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>IMAGE</th>
                                        <th>EMAIL</th>
                                        <th>STATUS</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                    </tfoot>
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
                "paging": true,
                "lengthChange": true,
                "searching": true,
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

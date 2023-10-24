@extends('layouts.master')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Welcome Back, Admin</h4>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="./assets/img/avatar2.png" class="img-fluid illustration-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card border-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>All User</h5>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{route('user.create')}}" class="add_emp">Tạo nhân viên mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">PostCode</th>
                            <th scope="col">Email</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Start_Date</th>
                            <th scope="col">Enable</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->postcode}}</td>
                            <td>{{$user->email}}</td>
                            {{-- <td>{{date('d-m-Y', strtotime($post->birthday))}}</td> --}}
                            <td>{{date('d-m-Y', strtotime($user->birthday))}}</td>
                            <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                            <td>
                                @if($user->enable)
                                <a href="" class="btn btn-success">Enable</a>
                                @else
                                <a href="" class="btn btn-danger">Disable</a>
                                @endif
                            </td>
                            <td>
                                <a href=""><i class="bi bi-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
@extends('layouts.master')

@section('content')
<main class="content px-3 py-2">
    @foreach ($errors as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
    <div class="container-fluid add_form">
        <h3 class="add_emp_title">Tạo nhân viên mới</h3>
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label for="">Họ tên</label>
                <input type="text" name="name">
            </div>
            <div class="field">
                <label for="">SĐT</label>
                <input type="text" name="phone">
            </div>
            <div class="field">
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
            <div class="field">
                <label for="">Ngày sinh</label>
                <input type="date" name="birthday">
            </div>
            <div class="field">
                <label for="">PostCode</label>
                <input type="text" name="code">
            </div>
            <div class="field">
                <label for="">Địa Chỉ</label>
                <input type="text" name="address">
            </div>
            <button class="btn btn-success">Thêm</button>
        </form>
    </div>
</main>
@endsection
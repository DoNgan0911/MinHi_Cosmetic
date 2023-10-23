@extends('layouts.master')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Danh sách nhân viên
                </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Cao Sỹ Kỳ</td>
                        <td>TPHCM</td>
                        <td>099883232</td>
                        <td>csk@mh</td>
                        <td>19/11/2003</td>
                        <td>20/1/2023</td>
                        <td class="delete">X</td>

                      </tr>
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="modalEmp hidden">
        <p class="confirm">Bạn có chắc muốn xóa ?</p>
        <div>
            <input type="button" class="Submit yes" value="Có"></input>
            <input type="button" class="Submit no" value="Không"></input>
        </div>
    </div>
    <div class="overlay hidden "></div>
</main>
@endsection
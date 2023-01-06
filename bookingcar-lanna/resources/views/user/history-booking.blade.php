@extends('layouts.user.user')
@section('title', 'ระบบจองรถ')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">การจอง</li>
@endsection

@section('breadcrumb-title')
    <h3>ประวัติการจอง</h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 xl-100 box-col-12">
                <div class="row total-sale-col">
                    <div class="col-xl-12 box-col-12 xl-100">
                        <div class="row">
                            <div class="col-12 xl-50">
                                <div class="card card-with-border welcome-card o-hidden">
                                    <table class="table table-hover">
                                        <thead align="center">
                                            <tr>
                                                <th scope="col">ลำดับ</th>
                                                <th scope="col">วันที่เดินทาง</th>
                                                <th scope="col">วันที่กลับ</th>
                                                <th scope="col">รายละเอียดการจอง</th>
                                            </tr>
                                        </thead>
                                        <tbody align="center">
                                            <tr>
                                                <th>1</th>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a href="" class="btn" style="background-color: #FFB100">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

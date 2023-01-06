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
    <h3>สถานะการจอง</h3>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 xl-100 box-col-12">
                <div class="row total-sale-col">
                    <div class="col-xl-12 box-col-12 xl-100">
                        <div class="row">
                            <div class="col-12 xl-50">
                                {{-- <div class="card card-with-border welcome-card o-hidden"> --}}
                                <table class="table  table-hover text-white table-bordered">
                                    <thead align="center">
                                        <tr>
                                            <th >ลำดับ</th>
                                            <th >วันที่เดินทาง</th>
                                            <th >วันที่กลับ</th>
                                            <th >สถานที่</th>
                                            <th >สถานะ</th>
                                            <th class="col-2 ">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th></th>
                                            <th class="text-center" >
                                                <div class="btn btn-danger">ยกเลิกการจอง</div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                {{--  </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

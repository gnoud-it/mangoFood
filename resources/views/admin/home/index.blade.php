@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header fw-semibold">
            Trang quản trị
        </div>
        <div class="card-body">
            Chào mừng bạn quay lại!
        </div>
    </div>

    <div class="row pt-4">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center fs-1 bg-index rounded-1 pt-5">
                        <i class="bi bi-people-fill text-white"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-index">Khách hàng</h5>
                            <hr>
                            <h6 class="card-title">0 Khách</h6>
                            <p class="card-text small">Tổng khách hàng ghé thăm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center fs-1 bg-primary rounded-1 pt-5">
                        <i class="bi bi-inboxes-fill text-white"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Sản phẩm</h5>
                            <hr>
                            <h6 class="card-title">0 Sản phẩm</h6>
                            <p class="card-text small">Tổng sản phẩm trong cửa hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center fs-1 bg-success rounded-1 pt-5">
                        <i class="bi bi-receipt-cutoff text-white"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-success">Đơn hàng</h5>
                            <hr>
                            <h6 class="card-title">0 Đơn</h6>
                            <p class="card-text small">Tổng đơn hàng trong ngày</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center fs-1 bg-danger rounded-1 pt-5">
                        <i class="bi bi-cash-coin text-white"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Doanh thu</h5>
                            <hr>
                            <h6 class="card-title">0 ₫</h6>
                            <p class="card-text small">Tổng doanh thu trong ngày</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-7">
            <div class="card">
                <div class="card-header fw-semibold">
                    Thống kê doanh thu
                </div>
                <div class="card-body">
                    <canvas id="myChart" style="width:100%; max-width:600px"></canvas>
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="card">
                <div class="card-header fw-semibold">
                    Hướng dẫn
                </div>
                <div class="card-body">
                    <p class="card-text">Các cột thống kê được đo theo đơn vị nghìn VNĐ</p>
                    <p class="card-text fst-italic small">Ví dụ: Cột "Gà rán" hiển thị 450
                        <i class="bi bi-arrow-right"></i> 450.000 VNĐ
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

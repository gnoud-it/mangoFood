@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                Hoàn tất mua hàng
            </div>
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    Quý khách đã thực hiện giao dịch mua đã hoàn tất! Đơn hàng sẽ sớm giao đến bạn. Mã đơn hàng là:
                    <b>#{{ $viewData['order']->getId() }}</b>
                    <br>
                    Theo dõi đơn hàng <a class="text-index fw-semibold text-decoration-none"
                        href="{{ route('myaccount.orders2') }}">TẠI ĐÂY</a>
                </div>
            </div>
        </div>
    </div>
@endsection

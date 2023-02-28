@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div id="bgCart" class="text-center mb-5 shadow" style="padding-top: 70px; padding-bottom: 70px;">
        <h2 class="text-white text-uppercase fw-semibold" style="letter-spacing: 2px;">Giỏ hàng</h2>
    </div>

    <div class="container pt-2 pb-4">
        <div class="card">
            <div class="card-header fw-semibold">
                Sản phẩm trong giỏ hàng
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col" class="w-25">Ảnh</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['products'] as $product)
                            <tr>
                                <td>{{ $product->getId() }}</td>
                                <td>{{ $product->getName() }}</td>
                                <td> <img src="{{ asset('/storage/' . $product->getImage()) }}" class="img-fluid w-25">
                                </td>
                                <td>{{ $product->getPrice() }} ₫</td>
                                <td>{{ session('products')[$product->getId()] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="text-end">
                        <a class="btn mb-2"><b class=" text-index">Tổng
                                cộng:</b>&nbsp;&nbsp;{{ $viewData['total'] }}&nbsp;₫</a>
                        @if (count($viewData['products']) > 0)
                            <a href="{{ route('cart.purchase') }}" class="btn btn-index text-white mb-2">Đặt hàng</a>
                            <a href="{{ route('cart.delete') }}">
                                <button class="btn btn-danger mb-2">
                                    Xoá tất cả sản phẩm
                                </button>
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

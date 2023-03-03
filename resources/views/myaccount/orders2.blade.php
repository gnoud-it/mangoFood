@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container pt-5 pb-4">
        <div class="text-center mb-5">
            <h2 class="text-index text-uppercase fw-semibold" style="letter-spacing: 2px;">Đơn hàng của bạn</h2>
        </div>
        @forelse ($viewData["orders"] as $order)
            <div class="card mb-4">
                <div class="card-header">
                    Đơn hàng #{{ $order->getId() }}
                </div>
                <div class="card-body">
                    <b>Ngày:</b> {{ $order->getCreatedAt() }}<br />
                    <b>Tổng:</b> {{ $order->getTotal() }},000 ₫<br />
                    <table class="table table-bordered table-striped text-center mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->getItems() as $item)
                                <tr>
                                    <td>{{ $item->getId() }}</td>
                                    <td>
                                        <a class="link-success"
                                            href="{{ route('menu.show', ['id' => $item->getProduct()->getId()]) }}">
                                            {{ $item->getProduct()->getName() }}
                                        </a>
                                    </td>
                                    <td>{{ $item->getPrice() }},000 ₫</td>
                                    <td>{{ $item->getQuantity() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @empty
            <div class="alert alert-danger text-center" role="alert">
                Có vẻ như bạn chưa mua bất cứ thứ gì trong cửa hàng của chúng tôi!
            </div>
        @endforelse
    </div>
@endsection

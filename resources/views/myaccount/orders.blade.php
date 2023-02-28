@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Đơn hàng #{{ $order->getId() }}
            </div>
            <div class="card-body">
                <b>Ngày:</b> {{ $order->getCreatedAt() }}<br />
                <b>Tổng:</b> {{ $order->getTotal() }} ₫<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Trạng thái</th>
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
                                <td>{{ $item->getPrice() }} ₫</td>
                                <td>{{ $item->getQuantity() }}</td>
                                <td class="fst-italic text-success fw-semibold">Đang giao</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-danger text-center" role="alert">
            Hiện không có đơn hàng nào!
        </div>
    @endforelse
@endsection

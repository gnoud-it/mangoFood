@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header fw-semibold">
            Quản lý sản phẩm
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button class="btn btn-primary btn-sm print-file" type="button">
                    <i class="fas fa-print"></i>In dữ liệu
                </button>
                <button class="btn btn-danger btn-sm ms-2" type="button">
                    <i class="fas fa-trash-alt"></i>Xóa tất cả
                </button>
            </div>
            <table class="table table-bordered table-striped" id="printablediv">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col" class="w-25">Ảnh</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr class="text-center">
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td><a href="{{ asset('/storage/' . $product->getImage()) }}" target="window"><img
                                        src="{{ asset('/storage/' . $product->getImage()) }}" class="img-fluid w-25"></a>
                            </td>
                            <td>{{ $product->getPrice() }},000 ₫</td>
                            <td>
                                <a class="btn btn-index rounded-circle"
                                    href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-circle">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

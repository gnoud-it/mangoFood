@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <section id="breadcrum">
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}"
                            class="text-decoration-none text-index">Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- nội dung -->
    <section class="bg-light">
        <div class="container">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <div class="mb-3">
                            <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <h3 class="text-index">
                                {{ $viewData['product']->getName() }}
                            </h3>
                            <p>{{ $viewData['product']->getDescription() }}</p>
                            <h5 class="text-danger">
                                {{ $viewData['product']->getPrice() }},000 ₫&nbsp;-&nbsp;<span
                                    class="text-success fst-italic fs-6">Còn hàng</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="border p-3">
                            <h5>Thông tin thanh toán </h5>
                            <hr />
                            <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}">
                                @csrf
                                <div class="row mb-3">
                                    <label htmlFor="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                                        Họ và tên
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label htmlFor="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                                        Địa chỉ
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label htmlFor="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                                        Số điện thoại
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-sm" id="colFormLabelSm"
                                            placeholder="" />
                                    </div>
                                    <label htmlFor="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                                        Số lượng
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="number" min="1" max="10"
                                            class="form-control form-control-sm quantity-input" name="quantity"
                                            value="1">
                                    </div>
                                </div>
                                <hr />
                                <button class="btn btn-index" type="submit">Đặt hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

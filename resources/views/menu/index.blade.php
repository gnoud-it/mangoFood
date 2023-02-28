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
                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </section>

    <section id="content1">
        <div id="bgMenu" class="text-center mb-5 shadow" style="padding-top: 70px; padding-bottom: 70px;">
            <h2 class="text-white text-uppercase fw-semibold" style="letter-spacing: 2px;">Menu tất cả các món</h2>
        </div>

        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page">Tất cả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="list-item-2" href="#" style="color: #f05123">Gà rán</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="list-item-2" href="#" style="color: #f05123">Hamburger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="list-item-3" href="#" style="color: #f05123">Khoai tây chiên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="list-item-4" href="#" style="color: #f05123">Nước có ga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="list-item-4" href="#" style="color: #f05123">Nước trái cây</a>
                </li>
            </ul>
        </div>

        <div class="container pt-5 pb-4">
            <div class="row text-center">
                @foreach ($viewData['products'] as $product)
                    <div class="col-12 col-lg-3 col-md-6 pb-4">
                        <div class="card h-100 shadow">
                            <a href="{{ route('menu.show', ['id' => $product->getId()]) }}" class="text-decoration-none">
                                <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top">
                            </a>
                            <div class="card-body border-bottom border-3 rounded border-index">
                                <h5 class="card-title text-index">{{ $product->getName() }}</h5>
                                <h6 class="card-title text-muted small pt-2">{{ $product->getDescription() }}
                                </h6>
                                <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">{{ $product->getPrice() }} ₫</h6>
                                <a class="btn btn-index" href="{{ route('menu.show', ['id' => $product->getId()]) }}"><i
                                        class="bi bi-basket2"></i>&nbsp;Chi tiết sản phẩm</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

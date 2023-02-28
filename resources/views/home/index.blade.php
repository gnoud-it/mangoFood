@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <section id="banner">
        <div id="carouselExampleCaptions" class="carousel carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src={{ asset('./images/slider/banner1.jpg') }} class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chào mừng đến với Mango Food</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src={{ asset('./images/slider/banner2.jpg') }} class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chào mừng đến với Mango Food</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src={{ asset('./images/slider/banner3.jpg') }} class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chào mừng đến với Mango Food</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="content1">
        <div class="bg-index p-3 text-center mb-5 shadow">
            <h2 class="text-white">Món mới</h2>
        </div>

        <div class="container pt-0 pb-4">
            <div class="row text-center">
                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#" class="text-decoration-none">
                            <img src={{ asset('./images/new-product/bur-new-1.jpg') }} class="card-img-top" alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Burger Cá Hồi Xông Khói (2 miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">Buger 2 Miếng cá hồi xông khói phô mai</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">99,000 ₫</h6>
                            <a class="btn btn-index" href="#"><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/new-product/bur-new-2.jpg') }} class="card-img-top" alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Burger Cá Hồi Xông Khói</h5>
                            <h6 class="card-title text-muted small pt-2">1 Burger Cá Hồi Xông Khói + 1 Khoai Tây Chiên
                                (M) + 1 Nước ngọt</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">79,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/new-product/chic-new-1.jpg') }} class="card-img-top" alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Gà Rán Giòn Cay (2 Miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">1 Nước (M) + 1 Khoai Tây (M) + 2
                                Miếng gà rán giòn cay
                            </h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">90,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/new-product/chic-new-2.jpg') }} class="card-img-top" alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Gà BBQ (2 Miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">1 Nước (M) + 1 Khoai Tây Chiên (M) + 3 Miếng gà
                                rán giòn cay</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">119,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content2">
        <div class="bg-index p-3 text-center mb-5 shadow">
            <h2 class="text-white">Combo tiết kiệm</h2>
        </div>

        <div class="container pt-0 pb-4">
            <div class="row text-center">
                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/combo-seller/combo-chic-1.jpg') }} class="card-img-top"
                                alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Gà Rán Giòn Cay (2 Miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">1 Nước (M) + 1 Khoai Tây (M) + 2
                                Miếng gà rán giòn cay
                            </h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">90,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/combo-seller/combo-chic-2.jpg') }} class="card-img-top"
                                alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Gà BBQ (2 Miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">1 Nước (M) + 1 Khoai Tây Chiên (M) + 3 Miếng gà
                                rán giòn cay</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">119,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/combo-seller/combo-bur-2.jpg') }} class="card-img-top"
                                alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Burger Cá Hồi Xông Khói (2 phần)</h5>
                            <h6 class="card-title text-muted small pt-2">2 Burger Cá Hồi Xông Khói + 4 Miếng gà viên + 2
                                Nước ngọt</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">169,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6 pb-4">
                    <div class="card h-100 shadow">
                        <a href="#">
                            <img src={{ asset('./images/combo-seller/combo-bur-1.jpg') }} class="card-img-top"
                                alt="...">
                        </a>
                        <div class="card-body border-bottom border-3 rounded border-index">
                            <h5 class="card-title text-index">COMBO Burger Cá Hồi Xông Khói (2 miếng)</h5>
                            <h6 class="card-title text-muted small pt-2">2 Miếng Cá Hồi Xông Khói Phô Mai + 1
                                Khoai tây chiên + 1 Nước ngọt</h6>
                            <h6 class="card-title text-danger fw-bold pt-2 pb-3 fs-5">109,000 ₫</h6>
                            <a class="btn btn-index" href=""><i class="bi bi-basket2"></i>&nbsp;Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

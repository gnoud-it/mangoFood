<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="./images/fav_logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('./plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./plugins/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Mango Food')</title>
</head>

<body class="bg-light">
    <section id="contact">
        <div class="overflow-hidden">
            <div class="bg-index2 container-fluid">
                <div class="row pt-1">
                    <div class="col-12 col-lg-6 col-md-8 mt-1 d-none d-lg-block d-md-block">
                        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: ''; margin-bottom: -15px;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item small">
                                    <h6 class="text-white float-start small">&nbsp;
                                        <a class="text-decoration-none text-white">Giờ mở cửa: T2-T6: 7:00 AM -
                                            22:30 PM, T7-CN: 7:30 AM - 23:00 PM
                                        </a>
                                    </h6>
                                </li>

                                <li class="breadcrumb-item small">
                                    <i class="text-white bi bi-telephone-fill float-start small"></i>
                                    <h6 class="text-white float-start small">&nbsp;
                                        <a href="tel:0339999" class="text-decoration-none text-white">033.9999</a>
                                    </h6>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-lg-6 col-md-4 mt-1">
                        <h6 class="text-white float-start small pe-2 float-end">
                            @guest
                                <a href="{{ route('register') }}" class="text-decoration-none text-white">Đăng ký</a>
                                <a class="text-decoration-none text-index">-</a>
                                <a href="{{ route('login') }}" class="text-decoration-none text-white">Đăng nhập</a>
                            @else
                                <div class="row">
                                    <div class="col-2">
                                        <a href="{{ route('myaccount.orders2') }}" class="text-decoration-none text-white">
                                            <i class="bi bi-receipt-cutoff"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a class="text-decoration-none text-white">-</a>
                                    </div>
                                    <div class="col-8">
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            <a role="button" class="text-decoration-none text-white"
                                                onclick="document.getElementById('logout').submit();">Đăng xuất&nbsp;
                                                <i class="bi bi-box-arrow-in-right"></i>
                                            </a>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </h6>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="header" class=" bg-light">
        <div class="container-fluid">
            <div class="container">
                <div class="row d-md-flex d-lg-flex mb-0">
                    <div class=" col-12 col-lg-4 col-md-5 mt-2 text-lg-start text-center">
                        <a href="{{ route('home.index') }}">
                            <img src="{{ asset('./images/logo.png') }}" class="w-50" alt="">
                        </a>
                    </div>

                    <div class="col-8 col-lg-5 col-md-5 mt-4">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Nhập sản phẩm cần tìm..."
                                aria-label="Search">
                            <button class="btn btn-index" id="basic-addon1">
                                <i class="bi bi-search text-white"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-4 col-lg-3 col-md-2 mt-3 mt-lg-2">
                        <button class="btn float-end">
                            <a href="{{ route('cart.index') }}">
                                <i class="bi bi-basket2-fill fs-2 text-index"></i>
                            </a>
                            {{-- <span class="badge text-bg-secondary rounded-5">+2</span> --}}
                        </button>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section id="navigation">
        <div class="col-12 col-lg-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar bg-index shadow-sm" style="letter-spacing: 1px;">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src={{ asset('./images/logo-nav.png') }} alt="Bootstrap" width="100" height="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav fw-semibold">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page"
                                    href="{{ route('home.index') }}">Trang
                                    chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu.index') }}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gioithieu.index') }}">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lienhe.index') }}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- CONTENT -->
    <div class="">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <section id="footer">
        <div class="container-fluid bg-index2">
            <div class="container pt-4 text-white-index">
                <div class="row d-block d-md-flex d-lg-flex">
                    <div
                        class="col-12 col-lg-3 col-md-6 pb-0 pb-lg-5 pt-4 pt-lg-5 text-center text-lg-start text-md-start">
                        <h6 class="pb-3 text-white text-uppercase">Hệ thống cửa hàng</h6>
                        <ul class="list-unstyled">
                            <li class="text-white"><a><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;Hồ Chí Minh:</a>
                            </li>
                            <li><a>CN1: 777 Lê Lai, Bến Thành, Q1</a></li>
                            <li><a>CN2: 448 Phan Huy Ích, P12, Gò Vấp</a></li>
                        </ul>
                    </div>

                    <div
                        class="col-12 col-lg-3 col-md-6 pb-0 pb-lg-5 pt-4 pt-lg-5 text-center text-lg-start text-md-start">
                        <h6 class="pb-3 text-white text-uppercase">Kết nối với chúng tôi</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="bi bi-facebook text-primary"></i>&nbsp;&nbsp;Facebook</a>
                            </li>
                            <li><a href="#"><i class="bi bi-instagram text-danger"></i>&nbsp;&nbsp;Instagram</a>
                            </li>
                            <li><a href="#"><i class="bi bi-youtube text-danger"></i>&nbsp;&nbsp;Youtube</a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="col-12 col-lg-3 col-md-6 pb-0 pb-lg-5 pt-4 pt-lg-5 text-center text-lg-start text-md-start">
                        <h6 class="pb-3 text-white text-uppercase">Chăm sóc khách hàng</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"><i
                                        class="bi bi-telephone-fill text-white"></i>&nbsp;&nbsp;033.9999</a></li>
                            <li><a href="#"><i
                                        class="bi bi-envelope-fill text-white"></i></i>&nbsp;&nbsp;admin@mango.com</a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="col-12 col-lg-3 col-md-6 pb-0 pb-lg-5 pt-4 pt-lg-5 text-center text-lg-start text-md-start">
                        <h6 class="pb-3 text-white text-uppercase">Đăng ký nhận thông báo</h6>
                        <p>Chúng tôi sẽ gửi mail cho bạn khi có thông tin mới về sản phẩm</p>
                        <form class="d-flex pb-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Nhập email của bạn..."
                                aria-label="Search">
                            <button class="btn btn-index" type="submit">Gửi</button>
                        </form>
                        <div class="text-center">
                            <a href="#"><img src="./images/logo-footer.png" width="250" height="80"></a>
                            <p>Since 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-2 text-white-index">
                <div class="row d-block d-md-flex d-lg-flex">
                    <a href="#" id="toTop" style="display: block;"><span id="toTopHover"
                            style="opacity: 1;"></span></a>
                    <div class="col text-center">
                        <p>&copy; 2023 All Right Reserved | Nhóm 5 - LTW A</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-fullscreen-sm-down modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Giỏ hàng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form check product -->
                    @foreach ($viewData['products'] as $product)
                        <form class="row g-3 needs-validation" validate>
                            <div class="col-lg-1 d-none d-lg-block position-relative">
                                <label for="#" class="form-label"></label>
                                <button type="button" class="btn text-danger fs-4">
                                    <i class="bi bi-x-circle-fill"></i>
                                </button>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 d-none d-lg-block d-md-block position-relative">
                                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}"
                                    class="img-fluid rounded-5 w-50 ms-4" alt="">
                            </div>
                            <div class="col-12 col-lg-4 col-md-5 position-relative">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="productName"
                                    value="{{ $product->getName() }}" readonly disabled required>
                            </div>
                            <div class="col-3 col-lg-1 col-md-1 position-relative">
                                <label for="productQuantity" class="form-label">SL</label>
                                <input type="number" class="form-control" id="validationTooltipUsername"
                                    aria-describedby="productQuantity"
                                    value="{{ session('products')[$product->getId()] }}" required>
                            </div>
                            <div class="col-9 col-lg-3 col-md-3 position-relative">
                                <label for="productPrice" class="form-label">Đơn giá</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="productPrice"
                                        aria-describedby="validationProductPrice" value="{{ $product->getPrice() }}"
                                        readonly required>
                                    <span class="input-group-text" id="validationProductPrice">đ</span>
                                    <div class="invalid-tooltip">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-block d-lg-none text-center position-relative">
                                <label for="#" class="form-label"></label>
                                <button type="button" class="btn text-danger fs-3">
                                    <i class="bi bi-x-circle-fill"></i>
                                </button>
                            </div>
                        </form>
                    @endforeach
                    <hr>
                    <!-- End Form check product -->
                    <hr>
                    <div class="col-12 text-end">
                        <label for="productNote" class="form-label fw-bold">Thành tiền:
                            {{ $viewData['total'] }} đ
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    @if (count($viewData['products']) > 0)
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Xoá tất cả sản phẩm
                            </button>
                        </a>
                        <a href="{{ route('cart.purchase') }}" class="btn btn-index">Thanh toán</a>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>

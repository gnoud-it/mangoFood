@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <section id="breadcrum">
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" route('home.index') " class="text-decoration-none text-index">Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giới Thiệu</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- nội dung -->
    <section class="bg-light">
        <div id="bgGioiThieu" class="text-center mb-5 shadow" style="padding-top: 70px; padding-bottom: 70px;">
            <h2 class="text-white text-uppercase fw-semibold" style="letter-spacing: 2px;">Giới thiệu</h2>
        </div>

        <div class="container pb-5">
            <div class="">
                <p class="fst-italic text-index" style="font-size: 70px;">
                    MangoFood
                </p>
                <p class="fs-5" style="color:#444444; margin-bottom: 20px">
                    Nắm bắt nhu cầu của người tiêu dùng Việt Nam hiện nay,
                    chúng tôi mong muốn phục vụ những bữa ăn nhanh nhưng hợp vệ
                    sinh, đầy đủ dưỡng chất cùng với cung cách phục vụ chuyên
                    nghiệp, MangoFood cam kết sẽ làm bạn hài lòng với dòng sản
                    phẩm nổi tiếng khắp thế giới. Không chỉ nổi tiếng về thức
                    ăn ngon, MangoFood còn nổi tiếng về chuỗi tiêu chuẩn Chất
                    Lượng, Dịch Vụ, Vệ Sinh và Giá trị.
                </p>
            </div>

            <div class="row">
                <div class="col col-12 col-md-6">
                    <div class="text-center py-4">
                        <img src="{{ asset('./images/hamburger/bur-1.jpg') }}" class="card-img-top" alt=""
                            width="835" height="418" />
                    </div>
                </div>
                <div class="col col-12 col-md-6 ps-3 pt-4">
                    <p class="text-index" style="font-size:40px;">
                        Tầm nhìn & hoài bão
                    </p>
                    <p class="fs-5" style="color:#444444; margin-bottom:12px">
                        MangoFood sẽ thiết lập một chuẩn mực mới cho ngành công
                        nghiệp nhà hàng phục vụ thức ăn nhanh tại Việt Nam, mang
                        đến cho khách hàng những trải nghiệm độc nhất chỉ có tại
                        chuỗi nhà hàng của chúng tôi.
                    </p>
                    <p class="fs-5" style="color:#444444; margin-bottom:12px">
                        Hoài bão của chúng tôi là phục vụ Thức ăn ngon cùng đội
                        ngũ Nhân Viên Chuyên Nghiệp,Thân Thiện và là một Thành
                        Viên Tốt của cộng đồng.
                    </p>
                    <p class="fs-5" style="color:#444444; margin-bottom:12px">
                        Thức ăn ngon: chúng tôi phục vụ thức ăn ngon từ nguồn
                        nguyên vật liệu chất lượng nhất và được chế biến theo
                        từng yêu cầu của khách hàng.
                    </p>
                </div>
                <hr>
                <div class="text-center">
                    <h1 class="text-index py-4">Các thành viên</h1>
                    <div class="row pt-3">
                        <div class="col-4">
                            <img src="{{ asset('./images/member/nvhd.jpg') }}" class="img-thumbnail w-75" alt="">
                            <div class="pt-2">
                                <h6>Nguyễn Viết Hải Dương</h6>
                                <h6>20-0-00093</h6>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('./images/member/nmk.jpg') }}" class="img-thumbnail w-75" alt="">
                            <div class="pt-2">
                                <h6>Nguyễn Minh Khoa</h6>
                                <h6>20-0-00158</h6>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('./images/member/vts.jpg') }}" class="img-thumbnail w-75" alt="">
                            <div class="pt-2">
                                <h6>Võ Thiện Sang</h6>
                                <h6>20-0-00481</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

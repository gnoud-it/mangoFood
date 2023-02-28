@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<section id="breadcrum">
    <div class="container pt-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{ route('home.index')}}" class="text-decoration-none text-index">Trang
                   chủ</a></li>
             <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
       </nav>
    </div>
 </section>
 <!-- nội dung -->
 <section class="bg-light">
    <div id="bgBlog" class="text-center mb-5 shadow" style="padding-top: 70px; padding-bottom: 70px">
      <h2 class="text-white text-uppercase fw-semibold" style="letter-spacing: 2px">
         Blog - tổng hợp thông tin
      </h2>
   </div>

   <div class="container">
      <div class="row pb-5">
        <div class="col-7 pb-2">
          <h3 class="text-index pb-2">Khuyến mãi từ cửa hàng</h3>
          <div class="card shadow mb-4">
            <img src="./images/blog/blog1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-index">VALENTINE</h5>
              <p class="card-text">
                Duyên là do trời định, phận là do con người tạo ra. Mà
                muôn hạnh phúc thì hãy tới với Mango Food ăn gà nào.
              </p>
              <a href="/#" class="btn btn-index float-end">
                Xem thêm
              </a>
            </div>
          </div>

          <div class="card shadow">
            <img src="./images/blog/blog2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-index">Quốc Tế Phụ Nữ</h5>
              <p class="card-text">
                Sắp tới đây sẽ là 8/3, đây là ngày hết sức quan trọng của
                các chị em phụ nữ. vì thế Mango Food sẽ tung ra món mới và
                hơn thế sẽ giảm giá cho các chị em phụ nữ khi tới của hàng
                của Mango.
              </p>
              <a href="/#" class="btn btn-index float-end">
                Xem thêm
              </a>
            </div>
          </div>
        </div>

        <div class="col-5 pb-2">
          <h3 class="text-index pb-2">Review & đánh giá</h3>
          <div class="card shadow mb-4">
            <img src="./images/blog/blog3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-index">
                Top 5 thương hiệu gà rán ngon nhất tại Việt Nam
              </h5>
              <p class="card-text text-truncate">
                Gà rán là món ăn nổi tiếng được mọi người yêu thích không
                chỉ đối với những bạn trẻ mà ngay cả những bậc phụ huynh,
                những người lớn tuổi. Trên thị trường hiện nay, có rất
                nhiều thương hiệu gà rán nổi tiếng xuất hiện khắp Việt
                Nam. Cùng Utop điểm qua top 5 thương hiệu gà rán ngon nhất
                tại Việt Nam nhé!
              </p>
              <a href="/#" class="btn btn-index float-end">
                Xem thêm
              </a>
            </div>
          </div>

          <div class="card shadow">
            <img src="./images/blog/blog4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-index">
                5 thông tin thú vị ngay cả "fan cứng" của món gà rán cũng
                chưa chắc đã biết
              </h5>
              <p class="card-text text-truncate">
                Khó ai cưỡng lại được một miếng gà chiên ngập dầu, bên
                ngoài giòn rụm, bên trong mềm mịn ngon ngọt. Trên thực tế,
                người Mỹ đã hoàn thiện phương pháp chiên gà độc đáo này
                nhưng có ảnh hưởng từ một số quốc gia khác. Ngoài ra còn
                một số bí mật thú vị về gà rán mà có thể những fan cứng
                của món ăn này cũng chưa biết được.
              </p>
              <a href="/#" class="btn btn-index float-end">
                Xem thêm
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>
@endsection
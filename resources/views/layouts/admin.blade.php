<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('./images/fav_logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link href="{{ asset('./plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./plugins/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body onload="initClock()">
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <div class="text-white text-center text-decoration-none">
                <img src="{{ asset('./images/logo-nav.png') }}" class="w-50" alt="">
                <br>
                <span class="fs-4 fw-semibold" style="letter-spacing: 1px">Bảng điều khiển</span>
            </div>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">
                        <i class="bi bi-house-fill"></i>&nbsp;&nbsp;Trang quản trị</a>
                </li>
                <hr />

                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">
                        <i class="bi bi-ui-checks-grid"></i>&nbsp;&nbsp;Quản lý sản phẩm</a>
                </li>
                <li><a href="{{ route('admin.product.add') }}" class="nav-link text-white">
                        <i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Thêm sản phẩm</a>
                </li>
                <li><a href="{{ route('admin.user.index') }}" class="nav-link text-white">
                        <i class="bi bi-people-fill"></i>&nbsp;&nbsp;Quản lý khách hàng</a>
                </li>
                <li><a href="{{ route('myaccount.orders') }}" class="nav-link text-white">
                        <i class="bi bi-receipt"></i>&nbsp;&nbsp;Đơn hàng</a>
                </li>
                <li class="text-center">
                    <a href="{{ route('home.index') }}" class="mt-2 btn btn-index text-white">Trở về cửa hàng</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <div class="text-start fw-semibold">
                    <span id="hour">00</span>:
                    <span id="minutes">00</span>:
                    <span id="seconds">00</span>
                    <span id="period">AM</span>
                    <span>-</span>
                    <span id="dayname">Day</span>,
                    <span id="daynum">00</span>
                    <span id="month">Month</span>,
                    <span id="year">Year</span>
                </div>
                <div class="text-end" style="margin-top: -25px">
                    <span class="profile-font fw-semibold">Xin chào Admin</span>
                    <img class="img-profile rounded-circle" src="{{ asset('/images/admin.png') }}">
                </div>
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center bg-dark">
        <div class="container">
            <small class="text-white fw-semibold">
                &copy; 2023 All Right Reserved | Nhóm 5 - LTW A
            </small>
        </div>
    </div>
    <!-- footer -->
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9",
                "Tháng 10",
                "Tháng 11", "Tháng 12"
            ];
            var week = ["Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
    </script>

    <script>
        var xValues = ["Gà rán", "Hamburger", "Khoai tây chiên", "Nước có gas", "Nước trái cây"];
        var yValues = [495, 450, 404, 240, 220];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Thống kê doanh thu trong vòng 1 tháng"
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>

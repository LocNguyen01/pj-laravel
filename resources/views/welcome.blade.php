<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo/E.png">
    <title>EDipaulo</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>
    <!--header-->
    <header>
        <img src="{{ asset('images/banner/VLL Store.png') }}" class="w-100 h-10 banner-img" alt="Ed Store">
    </header>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="resources\views\welcome.blade.php"><img src="{{ asset('images/logo/E.png') }}" class="img-fluid" style="width:50px; height:50px;" alt="Ed Store"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto nav-underline">
                    <li class="nav-item"><a class="nav-link active" href="/public">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Liên Hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giỏ Hàng</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--slideshow-->
    <div class="bd-slideshow">
        <div class="slide-show">
            <div class="list-images">
                <img src="{{ asset('images/slide-show/test1.png') }}" width="50%" alt="new collection">
                <img src="{{ asset('images/slide-show/test2.png') }}" width="50%" alt="dong ho">
                <img src="{{ asset('images/slide-show/test3.png') }}" width="50%" alt="tre trung nang dong">
                <img src="{{ asset('images/slide-show/test4.png') }}" width="50%" alt="sale thu">
            </div>

            <div class="btns">
                <div class="btn-left btn"><i class='bx bx-chevron-left'></i></div>
                <div class="btn-right btn"><i class='bx bx-chevron-right'></i></div>
            </div>

            <div class="index-images">
                <div class="index-item index-item-0 active"></div>
                <div class="index-item index-item-1"></div>
                <div class="index-item index-item-2"></div>
                <div class="index-item index-item-3"></div>
            </div>
        </div>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                    <div class="card-body product-card">
                        <h5 class="card-title">Áo Thun Nam</h5>
                        <p class="card-text">Giá: 300,000 VND</p>
                        <button class="btn btn-primary">Thêm vào Giỏ</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                    <div class="card-body product-card">
                        <h5 class="card-title">Áo Khoác Nữ</h5>
                        <p class="card-text">Giá: 500,000 VND</p>
                        <button class="btn btn-primary">Thêm vào Giỏ</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                    <div class="card-body product-card">
                        <h5 class="card-title">Quần Jeans</h5>
                        <p class="card-text">Giá: 400,000 VND</p>
                        <button class="btn btn-primary">Thêm vào Giỏ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white text-center py-1">
        <div class="container">
            <p>&copy; 2024 VLL Store. Tất cả quyền được bảo lưu.</p>
            <p>Email: linhpro9999@gmail.com | SĐT: 0906 200 094</p>
        </div>
    </footer>
<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
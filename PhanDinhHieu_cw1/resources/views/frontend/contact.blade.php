<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" href="./asset/css/index.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <header>
        <img alt="" src="./asset/logo01.png" class="img-responsive" />
        <h1>Trang Web Của Tôi</h1>
    </header>
    <div class="search">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Tìm kiếm</span>
            </div>
        </div>
    </div>

    <nav>
        <a href="index.html">Trang Chủ</a>
        <a href="product.html">Sản phẩm</a>
        <a href="product.html">Giỏ hàng</a>
        <a href="contact.html">Liên Hệ</a>
        <a href="contact.html">Đăng nhập</a>
        <a href="contact.html">Đăng ký</a>
    </nav>

    <section id="contact">
        <div class="container">
            <h2>Liên hệ</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Nội dung</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4>Thông tin liên hệ</h4>
                    <p><strong>Địa chỉ:</strong> 277/1b, quốc lộ 13, Thủ Đức</p>
                    <p><strong>Email:</strong> <a href="mailto:Phanhieu39@gmail.com">phanhieu39@gmail.com</a></p>
                    <p><strong>Điện thoại:</strong> 0349544297</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content clearfix">
            <div class="container">
                <div class="row">
                    <div class="footer-box box-address col-md-3 col-sm-12 col-xs-12">
                        <div class="item">
                            <div class="clearfix">
                                <a href="/">
                                    <img src="./asset/logo.jpg  " class="img-responsive" />
                                </a>
                            </div>
                            <div class="box-address-content">
                                <b>Trang Web Của Tôi</b>
                                <p><i class="fa fa-map-marker"></i>277/10b, quốc lộ 13, Thủ Đức</p>
                                <p>
                                    <i class="fa fa-envelope"></i>
                                    <a href="lamdat0402@gmail.com">Phanhieu39@gmail.com</a>
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i>
                                    Phone: 0349544297
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">
                        <div class="item">
                            <h3>
                                Facebook
                            </h3>
                            <div class="fb-like-box" data-href="https://www.facebook.com/runtime.vn" data-width="289"
                                data-height="190" data-colorscheme="dark" data-show-faces="true" data-header="false"
                                data-stream="false" data-show-border="false">
                            </div>
                            <div class="social-icon">
                                <ul>
                                    <li><a target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.facebook.com/runtime.vn" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <li><a target="_blank"><i class="fa fa-twitter "></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>Bản quyền © 2024 Trang Web Của Tôi. Được tạo bởi Phan Đình Hiếu</p>
    </footer>
</body>

</html>


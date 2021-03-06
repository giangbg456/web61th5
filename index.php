<?php
   include("admin/lib_db.php");
   include("admin/login.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link rel="stylesheet" href="css/style.css">
    <title>home</title>
</head>

<body>
    <header class="header">
        <a href="index.php" class="logo">
            <img src="img/logo.jpg" style="width: 100px;">
        </a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="phong.php">Rooms</a>
            <a href="events.php">events</a>
            <a href="contact.php">contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
        </div>

        <form action="" class="search-form">
            <input type="search" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>



        <form action="" class="login-form" method="POST">
            <img src="img/user.png" alt="" style="width:50%;  margin-left:50px;";>
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button class="btn-sm btn btn-block btn-wave col-md-4 btn-primary">Login</button>
        </form>

    </header>
    <section class="home" id="home">
        <div class="content">
            <span>
                Welcome To 5 
                <span class="fa fa-star text-primaryy"></span> Hotel
            </span>
            <h1>A Best Place To Stay</h1>
            <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="img/video.mp4"></span>
            <span class="vid-btn" data-src="img/video1.mp4"></span>
            <span class="vid-btn" data-src="img/video2.mp4"></span>
            <span class="vid-btn" data-src="img/video3.mp4"></span>
            <span class="vid-btn" data-src="img/video5.mp4"></span>
        </div>
        <div class="video-container">
            <video src="img/video2.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>

    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-4 content-left reveal">
                    <h2>Ch??o M???ng!</h2>
                    <p>Ch??o m???ng b???n ?????n v???i h??? th???ng Website c???a kh??ch s???n ch??ng t??i</p>
                    <p>T???i ????y b???n s??? ???????c tr???i nghi???m nh???ng d???ch v??? tuy???t v???i nh???t</p>
                    <p>
                        <a href="#"><button class="booking-btn">?????c Th??m</button></a>
                        <span>ho???c</span>
                        <button type="button" class="booking-btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://player.vimeo.com/video/67125737?h=f26f94ab45" data-bs-target="#myModal">Xem video</button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 15rem;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span></button>
                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="col-md-7 reveal">
                    <img src="https://preview.colorlib.com/theme/casahotel/img/xabout_feature_image.png.pagespeed.ic.cjiHIS3y1d.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="offers">
        <div class="container">
            <div class="head reveal">
                <h2>??u ????i ?????c Bi???t</h2>
                <p>T???i ????y b???n s??? ???????c tr???i nghi???m nh???ng d???ch v??? tuy???t v???i nh???t </p>
            </div>
            <div class="row bg-clor reveal">
                <div class="img-col">
                    <img src="img/phong1.png" alt="">
                </div>
                <div class="info-col col-sm info-room">
                    <span class="text-primaryy">300.000??</span> /1 ????m
                    <h2>Ph??ng ????n</h2>
                    <p>???????c trang tr?? v???i ????? n???i th???t m???c m???c, quy???n r??.C??ng v???i c??c ??i???m nh???n ki???u T??y Nam ?????y phong c??ch, m???i ph??ng ngh??? ?????u cung c???p m???t n??i tho???i m??i ????? l??m vi???c ho???c ngh??? ng??i v???i Wi-Fi mi???n ph??, TV m??n h??nh ph???ng v?? truy???n h??nh c??p.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>

            </div>
            <div class="row bg-clor reveal">
                <div class="col-md-6 info-room">
                    <span class="text-primaryy">500.000??</span> /1 ????m
                    <h2>Ph??ng ????i</h2>
                    <p>???????c trang tr?? v???i ????? n???i th???t m???c m???c, quy???n r??.C??ng v???i c??c ??i???m nh???n ki???u T??y Nam ?????y phong c??ch, m???i ph??ng ngh??? ?????u cung c???p m???t n??i tho???i m??i ????? l??m vi???c ho???c ngh??? ng??i v???i Wi-Fi mi???n ph??, TV m??n h??nh ph???ng v?? truy???n h??nh c??p.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>
                <div class="col-md-6">
                    <img src="img/room1.jpg" alt="">
                </div>


            </div>
            <div class="row bg-clor reveal">
                <div class="img-col">
                    <img src="img/phong2.png" alt="">
                </div>
                <div class="info-col col-sm info-room">
                    <span class="text-primaryy">1.500.000??</span> /1 ????m
                    <h2>Ph??ng T???ng Th???ng</h2>
                    <p>???????c trang tr?? v???i ????? n???i th???t m???c m???c, quy???n r??.C??ng v???i c??c ??i???m nh???n ki???u T??y Nam ?????y phong c??ch, m???i ph??ng ngh??? ?????u cung c???p m???t n??i tho???i m??i ????? l??m vi???c ho???c ngh??? ng??i v???i Wi-Fi mi???n ph??, TV m??n h??nh ph???ng v?? truy???n h??nh c??p.</p>
                    <a href="booking.php"><button class="booking-btn" id="booking-btn">BOOK NOW!</button></a>
                </div>

            </div>
            <a href="#"><button class="booking-btn show-room reveal">Xem T???t C??? C??c Ph??ng</button></a>
        </div>

        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="heading reveal">
                <h1>D???ch v??? v?? Ti???n ??ch</h1>
                <p>T???i ????y b???n s??? ???????c tr???i nghi???m nh???ng d???ch v??? tuy???t v???i nh???t </p>
            </div>
            <div class="row content reveal">
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon1.png" alt="">
                    <div class="info">
                        <h2>Nh?? ??n</h2>
                        <p>Nh?? ??n sang tr???ng v?? ngon mi???ng</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon2.png" alt="">
                    <div class="info">
                        <h2>B???n ?????</h2>
                        <p>D???n du kh??ch ?????n n??i c???n ?????n</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon3.png" alt="">
                    <div class="info">
                        <h2>H??? b??i</h2>
                        <p>Sang tr???ng v?? r???ng r??i</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon4.png" alt="">
                    <div class="info">
                        <h2>Ph??ng H???p</h2>
                        <p>Sang tr???ng v?? r???ng r??i</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon5.png" alt="">
                    <div class="info">
                        <h2>Khu ngh??? d?????ng</h2>
                        <p>Sang tr???ng v?? r???ng r??i</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon6.png" alt="">
                    <div class="info">
                        <h2>??i???u h??a</h2>
                        <p>Hai chi???u ph???c v?? qu?? kh??ch</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon7.png" alt="">
                    <div class="info">
                        <h2>Ph??ng T???m</h2>
                        <p>Hi???n ?????i v?? r???ng r??i</p>
                    </div>

                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon8.png" alt="">
                    <div class="info">
                        <h2>T??? D???ng ?????</h2>
                        <p>B???o qu???n v???t d???ng quan tr???ng</p>
                    </div>
                </div>
                <div class="col-md-4 display">
                    <img src="https://sktperfectdemo.com/themepack/hotel/wp-content/uploads/2019/09/facility-icon9.png" alt="">
                    <div class="info">
                        <h2>L??? T??n 24/7</h2>
                        <p>Lu??n s???n s??ng ph???c v???</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <div class="heading reveal">
            <h1>Ph???n H???i</h1>
        </div>
        <div class="swiper review-slider reveal">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong1.png" alt="">

                        <h3>Ho??ng Minh Giang</h3>
                        <p>M???i th??? ?????u s???ch s??? v?? ???????c b???o qu???n t???t v?? c?? m???i th??? t??i c???n. M???i khi ??? trong th??? tr???n, t??i ?????u g???p nh???ng ng?????i ch??? v?? h??? r???t t???t v?? h???u ??ch. T??i mu???n gi???i thi???u kh??ch s???n n??y cho b???t k??? ai mu???n c?? m???t n??i y??n t??nh an to??n</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong2.png" alt="">

                        <h3>Ph???m Anh Duy</h3>
                        <p>M???i th??? ?????u s???ch s??? v?? ???????c b???o qu???n t???t v?? c?? m???i th??? t??i c???n. M???i khi ??? trong th??? tr???n, t??i ?????u g???p nh???ng ng?????i ch??? v?? h??? r???t t???t v?? h???u ??ch. T??i mu???n gi???i thi???u kh??ch s???n n??y cho b???t k??? ai mu???n c?? m???t n??i y??n t??nh an to??n</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/phong3.png" alt="">

                        <h3>Cao Th??? Ch??m</h3>
                        <p>M???i th??? ?????u s???ch s??? v?? ???????c b???o qu???n t???t v?? c?? m???i th??? t??i c???n. M???i khi ??? trong th??? tr???n, t??i ?????u g???p nh???ng ng?????i ch??? v?? h??? r???t t???t v?? h???u ??ch. T??i mu???n gi???i thi???u kh??ch s???n n??y cho b???t k??? ai mu???n c?? m???t n??i y??n t??nh an to??n</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/room1.jpg" alt="">

                        <h3>Mixi Moi</h3>
                        <p>M???i th??? ?????u s???ch s??? v?? ???????c b???o qu???n t???t v?? c?? m???i th??? t??i c???n. M???i khi ??? trong th??? tr???n, t??i ?????u g???p nh???ng ng?????i ch??? v?? h??? r???t t???t v?? h???u ??ch. T??i mu???n gi???i thi???u kh??ch s???n n??y cho b???t k??? ai mu???n c?? m???t n??i y??n t??nh an to??n</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark" style="height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <a class="nav-link text-white" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Terms & Condition</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Rooms</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <a class="nav-link text-white" href="#!">The Rooms & Suites</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Contact Us</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="#!">Restaurant</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 mx-5">
                        <li>
                            <p class="text-white"><i class="fas fa-map-marker-alt" style="color:blue;"></i> Address:</p>
                            <p class="text-white-50">175 T??y S??n ?????ng ??a H?? N???i</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-phone" style="color: blue;"></i> Phone:</p>
                            <p class="text-white-50">(+84) 9999999999999</p>
                        </li>
                        <li>
                            <p class="text-white"><i class="fas fa-envelope" style="color: blue;"></i> Email:</p>
                            <p class="text-white-50">hello@gmail.com</p>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-instagram fa-lg" style="color: blue;"></i></a>
                            <a href=""><i class="fab fa-facebook-f fa-lg" style="color: blue; margin-left: 15px;"></i></a>
                            <a href=""> </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-md-5 mx-5">
                    <h6 class="text-white-50">Copyright &copy; 2021 by Nhom 2</h6>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/scriptt.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Chrev - Crypto Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="./images/logo.png" alt="">
            <img class="logo-compact" src="./images/logo-text.png" alt="">
            <img class="brand-title" src="./images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            首页速览
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-text" href="A_login_camera.html" >
                                <div class="header-info">
                                <span class="text-black"><strong>
                                        <?php
                                        session_start();
                                        if(!isset($_SESSION['username'])) {
                                            echo("Login");
                                        }
                                        ?>
                                    </strong></span>
                                </div>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="nav-tex" href="A_register_camera.html" >
                                <div class="header-info">
                                <span class="text-black"><strong>
                                        <?php
                                        if(!isset($_SESSION['username'])) {
                                            echo("Signup");
                                        }
                                        ?>
                                    </strong></span>
                                </div>
                            </a>
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <div class="header-info">
                                    <span class="text-black">Hello, <strong><?php
                                            if(isset($_SESSION['username'])){
                                                echo($_SESSION['username']);
                                            }else{
                                                echo("未登录");
                                            }
                                            ?></strong></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./my_order.php" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ml-2">My Order </span>
                                </a>
                                <a href="A_login_camera.html" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->


    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="index.php" aria-expanded="false">
                        <img src="./images/icon/home.png" width="25" height="25"/>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="flight.php" aria-expanded="false">
                        <img src="./images/icon/flight.png" width="25" height="25"/>
                        <span class="nav-text">Flights</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="car.php" aria-expanded="false">
                        <img src="./images/icon/car%20(1).png" width="25" height="25"/>
                        <span class="nav-text">Car Rent</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="guide.php" aria-expanded="false">
                        <img src="./images/icon/guide.png" width="25" height="25"/>
                        <span class="nav-text">Guides</span>
                    </a>
                </li>
            </ul>

            <div class="add-menu-sidebar">
                <p>Generate Monthly Credit Report</p>
                <a href="javascript:void(0);">
                    <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.725 5.14889C23.7248 5.14861 23.7245 5.14828 23.7242 5.148L18.8256 0.272997C18.4586 -0.0922062 17.865 -0.0908471 17.4997 0.276184C17.1345 0.643169 17.1359 1.23675 17.5028 1.602L20.7918 4.875H0.9375C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75H20.7917L17.5029 10.023C17.1359 10.3882 17.1345 10.9818 17.4998 11.3488C17.865 11.7159 18.4587 11.7172 18.8256 11.352L23.7242 6.477C23.7245 6.47672 23.7248 6.47639 23.7251 6.47611C24.0923 6.10964 24.0911 5.51414 23.725 5.14889Z" fill="white"/>
                    </svg>
                </a>
            </div>
            <div class="copyright">
                <p><strong>Chrev - Crypto Admin Dashboard</strong> © 2020 All Rights Reserved</p>
                <p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-4 mb-md-5 align-items-start">
                <div class="input-group search-area d-inline-flex">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search here">
                </div>
            </div>

            <!--低价速报-->
            <div class="card-header">
                <h4 class="card-title"><strong>低价速报</strong></h4>
            </div>
            <div class="row">
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/飞机.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价机票</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">北京——昆明 12.17 1.5折 ¥378
                        </p>
                        <p class="card-text">北京——成都 01.05 1.3折 ¥271
                        </p>
                        <p class="card-text text-dark"></p>
                    </div>
                </div>
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/出租车.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价打车</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">昌平——沙河 出租5折</p>
                        <p class="card-text">五道口——劲松 出租8折</p>
                        <p class="card-text">知春路——西二旗 出租7折</p>
                        <p class="card-text text-dark"></p>
                    </div>
                </div>
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/邮轮.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价邮轮</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">【西沙航线】三亚出港 | 西沙邮轮 海南三亚西沙群岛旅游南海之梦邮轮 四天三晚一价全包 ¥4680起/人</p>

                        <p class="card-text text-dark"></p>
                    </div>
                </div>
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/酒店1.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价住宿</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">锦江之星(北京王府井店)</p>
                        <p class="card-text">商务房A 大床 无餐食 ¥389起</p>
                        <p class="card-text text-dark"></p>
                    </div>
                </div>
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/故宫.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价游玩</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">故宫：世界五大宫之首，穿越与您近在咫尺</p>
                        <p class="card-text">成人票 ¥36.9起</p>
                        <p class="card-text text-dark"></p>
                    </div>
                </div>
                <div class="col-xl-2">
                    <img class="card-img-top img-fluid" src="./images/hainan/全聚德.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">低价吃喝</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">优惠单人餐 ¥250起</p>
                        <p class="card-text">优惠双人餐 ¥500起</p>
                        <p class="card-text text-dark"></p>
                    </div>
                </div>
            </div>
            <!--低价速报end-->
            <div class="card-header">
                <h4 class="card-title"><strong>当季热门景点</strong></h4>
            </div>
            <div class="row">
                <!--top 6-->
                <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <div class="profile-interest mb-5">
                            <h5 class="text-primary d-inline">Top 6</h5>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/lijiang.jpg" alt="" class="img-fluid">
                                        <p>丽江</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/sanya.jpg" alt="" class="img-fluid">
                                        <p>三亚</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/chongqin.jpg" alt="" class="img-fluid">
                                        <p>重庆</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/taiguo.jpg" alt="" class="img-fluid">
                                        <p>泰国</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/xian.jpg" alt="" class="img-fluid">
                                        <p>西安</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="images/hainan/zhangjiajie.jpg" alt="" class="img-fluid">
                                        <p>张家界</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-2"><a href="javascript:void(0)" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                </div>

                <!--top 6 end-->
            </div>
            </div>
            <div class="card-header">
                <h4 class="card-title"><strong>本地热门景点</strong></h4>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <img class="card-img-top img-fluid" src="./images/hainan/gugong.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">故宫</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <img class="card-img-top img-fluid" src="./images/hainan/changcheng.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">长城</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <img class="card-img-top img-fluid" src="./images/hainan/gongwangfu.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">恭王府</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <img class="card-img-top img-fluid" src="./images/hainan/yiheyuan.jpg" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">颐和园</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://www.bootstrapmb.com/" target="_blank">DexignZone</a> 2020</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="./vendor/owl-carousel/owl.carousel.js"></script>



<!-- Chart piety plugin files -->
<script src="./vendor/peity/jquery.peity.min.js"></script>


<!-- Dashboard 1 -->
<script src="./js/dashboard/dashboard-1.js"></script>
<script>
    function carouselReview(){
        /*  testimonial one function by = owl.carousel.js */
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.owl-bank-wallet').owlCarousel({
            loop:true,
            autoplay:false,
            margin:0,
            nav:false,
            center:true,
            dots: false,
            navText: [''],
            responsive:{
                0:{
                    items:2
                },

                480:{
                    items:2
                },

                991:{
                    items:3
                },
                1200:{
                    items:3
                },
                1600:{
                    items:2
                }
            }
        })

        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:15,
            nav:true,
            dots: false,
            center:true,
            navText: ['', '<i class="las la-long-arrow-alt-right"></i>'],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:5
                },
                991:{
                    items:8
                },

                1200:{
                    items:8
                },
                1600:{
                    items:6
                }
            }
        })
    }

    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>

</body>
</html>
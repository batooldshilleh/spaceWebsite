<?php
session_start();

if (!isset($_SESSION['userName'])){
    header("Location:log.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>الصفحة الرئيسية</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <link rel="stylesheet" href="CSS/explor.css">

</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                الشِّعْرَى
            </h2>

            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="أبحث">
            </div>

            <div class="create">
                <lable for="create-post" class="btn btn-primary">تسجيل الخروج</lable>
                <div class="profile-photo">
                    <img src="IMGES/explor-img/profile-pic.jpeg" >
                </div>
            </div>
        </div>

    </nav>
<!-----------main------------>
<main>

    <div class="container">

        <!--left-->
        <div class="left">

            <a href="" class="profile">

                <div class="profile-photo">

                    <img src="IMGES/explor-img/profile-pic.jpeg" >

                </div>

                <div class="handle">

                    <h4>Batool Shilleh</h4>

                    <p class="text-muted">
                        @b2001
                    </p>

                </div>

            </a>

            <!--sidebar-->
            <div class="sideBar">

                <a class="menu-item active" href="explor.php">
                    <span>
                        <i class="uil uil-home " ></i>
                    </span>
                        <h3>الصغحة الرئيسية</h3>
                </a>
                <a class="menu-item" id="massages-notification" >
                     <span>
                        <i class="uil uil-envelope-check" ></i>
                     </span>
                    <h3>الرسائل</h3>

                </a>

                <a class="menu-item" id="notification" >
                    <span style="position: absolute">
                        <i class="uil uil-bell"></i>
                        <h3  > الإشعارات</h3>
                    </span>
                        <!--notification popup-->
                        <div class="notification-popup">
                            <div>
                                <div class="profile-photo">
                                    <img  src="IMGES/explor-img/profile-pic.jpeg" >
                                    </div>
                                <div class="notification-body">
                                    <b>بسام تفاحة</b> قام بنشر حالة
                                    <small class="text-muted">منذ يومان</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img  src="IMGES/explor-img/profile-pic.jpeg" >
                                </div>
                                <div class="notification-body">
                                    <b>بسام تفاحة</b> قام بنشر حالة
                                    <small class="text-muted">منذ يومان</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img  src="IMGES/explor-img/profile-pic.jpeg" >
                                </div>
                                <div class="notification-body">
                                    <b>بسام تفاحة</b> قام بنشر حالة
                                    <small class="text-muted">منذ يومان</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img  src="IMGES/explor-img/profile-pic.jpeg" >
                                </div>
                                <div class="notification-body">
                                    <b>بسام تفاحة</b> قام بنشر حالة
                                    <small class="text-muted">منذ يومان</small>
                                </div>
                            </div>
                        </div>
                    <!--end notification-popup -->
                </a>



                <a class="menu-item" href="quiz.html">
                     <span>
                        <i class="uil uil-bolt"></i>
                     </span>
                        <h3>الإختبارات</h3>
                </a>


                <a class="menu-item" href="map.php">
                    <span>
                        <i class="uil uil-telescope"></i>
                    </span>
                        <h3>الخريطة</h3>
                </a>

                <a class="menu-item ">
                    <span>
                        <i class="uil uil-palette"  id="theme"></i>
                    </span>
                        <h3>السمات</h3>
                </a>

            </div>
            <!--end of sidebar-->

            <label for="create-post" class="btn btn-primary">الصفحة الشخصية</label>
        </div>

        <!--middle-->
        <div class="middle">
            <form class="create-post">
                <div class="profile-photo">
                    <img src="IMGES/explor-img/profile-pic.jpeg">
                </div>
                <input type="text" placeholder="بماذا تفكر؟" id="create-post">
                <input type="submit" value="نشر" class="btn btn-primary">
            </form>
            <div class="feeds">
                <div class="feed">
                    <div class="head">
                        <div class="user">
                            <div class="profile-photo">
                                <img src="IMGES/explor-img/profile-pic.jpeg" >
                            </div>
                            <div class="ingo">
                                <h3>منار محمد</h3>
                                <small>كوريا،منذ 15 دقيقة</small>
                            </div>
                        </div>
                        <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                    </div>
                    <div class="photo">
                        <img src="IMGES/home-img/1.jpeg" >
                    </div>
                    <div class="action-button">
                        <div class="interaction-buttons">
                            <span><i class="uil uil-heart"></i></span>
                            <span><i class="uil uil-comment-dots"></i></span>
                            <span><i class="uil uil-share-alt"></i></span>
                        </div>
                    </div>
                    <div class="like-by">
                        <span><img src="IMGES/home-img/3.jpeg" ></span>
                        <span><img src="IMGES/home-img/2.jpeg" ></span>
                        <span><img src="IMGES/home-img/4.jpg" ></span>
                        <span><img src="IMGES/home-img/5.jpeg" ></span>
                        <p><b>سلسبيل محمد ، رهف نصر الله و 5 أخرين </b>أعجبو بمنشورك</p>
                    </div>

                    <div class="caption">
                        <p><b>منار محمد</b>بديع الخالق </p>
                        <span class="harsh-tag">#فضاء</span>
                    </div>
                    <div class="comments text-muted">
                        عرض 5 تعليقات
                    </div>
                </div>
            </div>
        </div>
        <!--right-->
        <div class="right">
            <div class="massages">
                <div class="heading">
                    <h4>الرسائل</h4><i class="uil uil-edit"></i>
                </div>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input type="search" placeholder="البحث في الرسائل" id="message-search">
                </div>
                <div class="category">
                    <h6 class="active">المحادثات</h6>
                    <h6 class="message-requests">طلبات المراسلة (2)</h6>
                </div>
                <div class="message">
                    <div class="profile-photo">
                        <img src="IMGES/explor-img/profile-pic.jpeg">
                    </div>
                    <div class="message-body">
                        <h5>رهف نصر الله</h5>
                        <p class="text-muted">ي نص</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--theme-->
<div class="customize-theme">
    <div class="card">
        <h2>أختار التنسيق الذي يناسبك</h2>
        <p class="text-muted">أختار اللون ، وحجم الخط</p>
    <div class="font-size">
    <h4>حجم الخط</h4>
    <div>
        <h6>أب</h6>
        <div class="choose-size">
            <span class="font-size-1"></span>
            <span class="font-size-2 active"></span>
            <span class="font-size-3"></span>
            <span class="font-size-4"></span>
            <span class="font-size-5"></span>
        </div>
        <h3>أب </h3>
    </div>
    </div>

<div class="color">
    <h4>اللون</h4>
    <div class="choose-color">
        <span class="color-1 active"></span>
        <span class="color-2 "></span>
        <span class="color-3 "></span>
        <span class="color-4 "></span>
        <span class="color-5 "></span>
    </div>
</div>
</div>
</div>
    <script src="js/explor.js"></script>
</body>

</html>
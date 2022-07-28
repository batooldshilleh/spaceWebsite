<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المسؤول</title>
    <link rel="stylesheet" href="CSS/Admin.css" >

</head>
<body>

<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"></span>
                    <span class="title" style="font-weight: bold; font-size: 30px">الشِّعرَى</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="planet-outline"></ion-icon></span>
                    <span class="title">لوحة التحكم</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="title">المسؤولون</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="mail-open-outline"></ion-icon></span>
                    <span class="title">الرسائل</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">الإعدادات</span>
                </a>
            </li>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="grid-outline"></ion-icon>
            </div>
            <div class="search">
                <lable>
                    <input type="search" placeholder="البحث">
                    <ion-icon name="search-outline"></ion-icon>
                </lable>
            </div>
            <div class="user">
                <img src="IMGES/explor-img/profile-pic.jpeg" alt="">
            </div>
        </div>
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="number">1.504</div>
                    <div class="cardName">
                        الزوار اليومين
                    </div>
                </div>
                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="number">1.504</div>
                    <div class="cardName">
                        المستخدمين
                    </div>
                </div>
                <div class="iconBx">
                    <ion-icon name="accessibility-outline"></ion-icon>
                </div>
            </div>
        </div>

        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <a href="#" class="btn">
                        عرض الكل
                    </a>
                    <h2>
                        الإشعارات
                    </h2>

                </div>
                <table>
                    <thead>
                    <tr>
                        <td>الاشعار </td>
                        <td>الاسم </td>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>أمشائت حساب جديد</td>
                        <td>منار محمد</td>

                    </tr>
                    <tr>
                        <td>أمشائت حساب جديد</td>
                        <td>منار محمد</td>

                    </tr>
                    <tr>
                        <td>أمشائت حساب جديد</td>
                        <td>منار محمد</td>

                    </tr>
                    <tr>
                        <td>أمشائت حساب جديد</td>
                        <td>منار محمد</td>

                    </tr>
                    <tr>
                        <td>أمشائت حساب جديد</td>
                        <td>منار محمد</td>

                    </tr>

                    </tbody>
                </table>
            </div>

            <div class="recentAdmin">
                <div class="cardHeader" style=" margin-left:260px">
                    <h2 >
                        المسؤولين
                    </h2>
                </div>
                <table>
                    <tr>

                           <td width="60px"> <div class="imgBx"> <img src="IMGES/explor-img/profile-pic.jpeg"></div></td>
                            <td><h4>  بتول شلة </h4><br><span>فلسطين</span></td>
                    </tr>

                    <tr>

                        <td width="60px"> <div class="imgBx"> <img src="IMGES/explor-img/profile-pic.jpeg"></div></td>
                        <td><h4> بسام تفاحة </h4><br><span>فلسطين</span></td>
                    </tr>

                    <tr>

                        <td width="60px"> <div class="imgBx"> <img src="IMGES/explor-img/profile-pic.jpeg"></div></td>

                        <td><h4> حنين خنفر </h4><br><span>الاردن</span></td>

                    </tr>

                    <tr>

                        <td width="60px"> <div class="imgBx"> <img src="IMGES/explor-img/profile-pic.jpeg"></div></td>

                        <td><h4> صفاء الامريكية </h4><br><span>السودان</span></td>

                    </tr>

                    <tr>

                        <td width="60px"> <div class="imgBx"> <img src="IMGES/explor-img/profile-pic.jpeg"></div></td>
                        <td><h4> ريم القواسمة </h4><br><span>الاردن</span></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let list= document.querySelectorAll('.navigation  li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>

    <!--menu topgel-->
    <script>
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function (){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>

</body>
</html>
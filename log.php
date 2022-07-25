<!---->
<?php

$server ="localhost";
$username = "root";
$password = "";
$databaseName = "space_project";

$con = mysqli_connect($server,$username,$password,$databaseName);
?>

<!--creat acaunt-->
<?php
#get data from text field
if(isset($_POST['reg_est'])){
    $un =$_POST['unr'];
    $em =$_POST['er'];
    $p = $_POST['rp'];

    $sql_ ="SELECT * FROM user WHERE userName = '$un'";

    $result =mysqli_query($con,$sql_);

    if(!$result->num_rows > 0){
        $sql ="INSERT INTO user (userName,	email,password) VALUES ('$un','$em','$p')";

        $res = mysqli_query($con,$sql);

        if($res){
            echo "<script>
                    alert('لقد تم إنشاء الحساب')
                </script> " ;

            #remove text from text field
            $un="";
            $p="";
            $em="";

        }

    }

    else{
        echo  "<script>alert('خطا في المعلومات المدخلة')</script> ";
    }
}
?>

<!--login-->
<?php
session_start();
error_reporting(0);

if (isset($_SESSION['userName'])) {
    header("Location: home.php");
}
if(isset($_POST['lb'])){
    $u_n =$_POST['e_m'];
    $pass =$_POST['Pass_word'];
    $sql_l="SELECT * FROM user WHERE email='$u_n' AND password='$pass'";
    $res_log = mysqli_query($con,$sql_l);
    if(!$res_log -> num_rows >0){
        $row = mysqli_fetch_assoc($res_log);
        $_SESSION['userName'] = $row['userName'];
        header("Loc:explor.php");
    }
    else{
        echo "<script>
                    alert(' هناك خطأ في كلمة المرور أو البريد الإلكتروني ')
                </script> " ;

    }
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script
          src="https://kit.fontawesome.com/64d58efce2.js"
          crossorigin="anonymous"
  ></script>

  <link rel="stylesheet" href="CSS/log.css" />

  <title>نضم إلينا</title>

</head>

<body>


<div class="container">

  <div class="forms-container">

    <div class="signin-signup">

      <form  class="sign-in-form" method="post">

        <h2 class="title">تسجيل الدخول</h2>

        <div class="input-field">

          <i class="fas fa-user"></i>

          <input type="text" placeholder="البريد الإلكتروني" name="e_m" />

        </div>

        <div class="input-field">

          <i class="fas fa-lock"></i>

          <input type="password" placeholder="كلمة المرور" name="Pass_word" />

        </div>

        <input type="submit" value="تسجيل الدخول" class="btn solid" name="lb"/>

        <p class="social-text">يمكنك تسجيل الدخول عن طريق </p>

        <div class="social-media">

          <a href="#" class="social-icon">

            <i class="fab fa-facebook-f"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-twitter"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-google"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-linkedin-in"></i>

          </a>

        </div>

      </form>

      <form  action="" class="sign-up-form" method="post" id="reg">

          <h2 class="title">إنشاء حساب</h2>

        <div class="input-field">

          <i class="fas fa-user"></i>

          <input type="text" name="unr" placeholder="اسم المستخدم" />

        </div>

        <div class="input-field">

          <i class="fas fa-envelope"></i>

          <input type="email" name="er" placeholder="البريد الإلكتروني" />

        </div>

        <div class="input-field">

          <i class="fas fa-lock"></i>

          <input type="password" name="rp" placeholder="كلمة المرور" />

        </div>

          <button name = "reg_est" type="submit" class="btn" >إنشاء حساب</button>

        <p class="social-text">أو يمكنك إنشاء حساب عن طريق </p>

        <div class="social-media">

          <a href="#" class="social-icon">

            <i class="fab fa-facebook-f"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-twitter"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-google"></i>

          </a>

          <a href="#" class="social-icon">

            <i class="fab fa-linkedin-in"></i>

          </a>

        </div>



      </form>

    </div>

  </div>

  <div class="panels-container">

    <div class="panel left-panel">

      <div class="content">

        <h3>وَأَنَّهُ هُوَ رَبُّ الشِّعْرَىٰ</h3>

        <p>
          ابدأ رحلتك الآن إلى الفضاء ، شاهد بدائع الكون ، و كن أقرب إلى السماء ، كل ما تحتاجه
          لمراقبة الكون في موقع واحد
        </p>

        <button class="btn transparent" id="sign-up-btn">
          إنشاء حساب
        </button>

      </div>

      <img src="login-img/log.svg" class="image" alt="" />

    </div>

    <div class="panel right-panel">

      <div class="content">

        <h3> كُلٌّ فِي فَلَكٍ يَسْبَحُونَ</h3>

        <p>
          هذا الكون مليء بالعجائب و الأمور المثيرة لدهشة ، سيجعلك موقعنا ترى الكون بشكل أقرب
          أنضم إلينا الآن و شاهد روعة العالم الفتان
        </p>

        <button class="btn transparent" id="sign-in-btn">
          تسجيل دخول
        </button>

      </div>

      <img src="login-img/register.svg" class="image" alt="" />

    </div>

  </div>

</div>

<script src="js/log.js"></script>

</body>

</html>
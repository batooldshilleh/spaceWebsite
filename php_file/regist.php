<?php
$server ="localhost";
$username = "root";
$password = "";
$databaseName = " space_project";

$con = mysqli_connect($server,$username,$password,$databaseName);
?>
<?php

session_start();
error_reporting(0);

if (isset($_SESSION['userName'])) {
    header("Location: home.php");
}
#get data from text field
if(isset($_POST['reg_est'])){
    $un =$_POST['unr'];
    $em =$_POST['er'];
    $p =md5( $_POST['rp']);

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

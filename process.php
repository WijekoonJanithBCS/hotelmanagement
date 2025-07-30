<?php
session_start();
//include("dbcon.php");

require_once("./dbcon.php");


if(isset($_POST['register'])){
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $ugender=$_POST['ugender'];
    $ucity=$_POST['ucity'];

    $sql="INSERT INTO user(name,email,pw,gender,city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity');";
    $res = mysqli_query($con, $sql);

    if($res){
        echo "successfully inserted";
        header('location:login.php');
    }
    else{
        echo "failed to insert";
        header('location:register.php');
    }

    
}

///user login 

if(isset($_POST['login'])){
    //echo "login success";
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];

    $sql="SELECT*FROM user WHERE email='$uemail' AND pw='$upass';";
    $res=mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>0){
        echo "login successful";
        $_SESSION['user']=$uemail;
        header('location:booking.php');
    }
    else{
        //echo "wrong credentials";
        header('location:login.php');
    }

}

if(isset($_POST['booking'])){
    $uemail=$_POST['uemail'];
    $hotelname=$_POST['hotel'];
    $startdate=$_POST['sdate'];
    $enddate=$_POST['edate'];

    $sql="INSERT INTO booking(uemail,hotel,startdate,enddate) VALUES ('$uemail','$hotelname','$startdate','$enddate');";

    $res=mysqli_query($con,$sql);

    if($res){
        echo "booking added";
        header('location:index.php');
    }
    else{
        echo "failed to add";
        header('location:booking.php');
    }
}

//admin login

if(isset($_POST['adminlogin'])){
    //echo "admin success";
    $username=$_POST['username'];
    $pw=$_POST['adminpw'];

    $sql="SELECT*FROM admin WHERE username='$username' AND pw='$pw';";
    $res=mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>0){
        //echo "login admin success";
        $_SESSION['auser']=$username;
        header('location:admin/adashboard.php');
    }
    else{
        //echo "failed to login";
        header('location:admin/adminlogin.php');
    }
}

//add user through admin

if(isset($_POST['aUserRegister'])){
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $ugender=$_POST['ugender'];
    $ucity=$_POST['ucity'];

    $sql="INSERT INTO user(name,email,pw,gender,city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity');";
    $res = mysqli_query($con, $sql);

    if($res){
        echo "successfully inserted";
        header('location:./admin/adashboard.php');
    }
    else{
        echo "failed to insert";
        header('location:./admin/aUserRegister.php');
    }
}

if(isset($_POST['aUserUpdate'])){
   // echo "update button clicked";
    $id=$_POST['id'];
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $ugender=$_POST['ugender'];
    $ucity=$_POST['ucity'];

    $sql="UPDATE user set name='$uname',email='$uemail',pw='$upass', gender='$ugender' ,city='$ucity' WHERE id='$id'; ";
    $res=mysqli_query($con,$sql);
    if($res){
        //echo "update success";
        header('location:admin/adashboard.php');
    }
    else{
        //echo "failed to update";
        header('location:admin/adashboard.php');
    }
}
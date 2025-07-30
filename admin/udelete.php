<?php

     $id=$_GET['id'];

    include ('../dbcon.php');

   

    $sql="DELETE FROM user WHERE id='$id'; ";
    $res=mysqli_query($con,$sql);

    if($res){
        header('location:./adashboard.php');
    }
    else{
        echo "failed to delete";
    }
<?php
include 'connect.php';

if(isset($_GET['did'])){

    $id=$_GET['did'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
        
    }
    else{

        die(mysqli_error($con));
    }
}


?>
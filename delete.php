<?php
include("connection.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        // echo "delete successful";
        header('location:display.php');
    }
    else{
        echo "failed";
    }
}
?>
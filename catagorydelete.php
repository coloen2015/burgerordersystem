<?php
    if(isset($_GET['cid'])){
        $id=$_GET['cid'];

        $con=mysqli_connect("localhost","root","","finalboss");
        $sql="DELETE FROM `catagory` WHERE c_id='$id'";

        mysqli_query($con,$sql);
        header("Location:catagory.php");

    }
?>
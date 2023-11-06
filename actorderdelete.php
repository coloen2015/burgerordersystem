<?php
    if(isset($_GET['acid'])){
        $id=$_GET['acid'];

        $con=mysqli_connect("localhost","root","","finalboss");
        $sql="DELETE FROM `carttable` WHERE cart_id='$id'";

        mysqli_query($con,$sql);
        // header("Location:actorder.php");
        echo ("done");
    }
?>
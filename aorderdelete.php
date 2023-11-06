<?php
    if(isset($_GET['oid'])){
        $id=$_GET['oid'];

        $con=mysqli_connect("localhost","root","","finalboss");
        $sql="DELETE FROM `ordertable` WHERE o_id='$id'";

        mysqli_query($con,$sql);
        header("Location:aorder.php");

    }
?>
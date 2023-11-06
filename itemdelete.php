<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $con=mysqli_connect("localhost","root","","finalboss");
        $sql="DELETE FROM `item` WHERE item_id='$id'";

        mysqli_query($con,$sql);
        header("Location:item.php");

    }
?>
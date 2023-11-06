<?php 
    include("dbcon.php");
    
?>
<?php
    include("head.php");
?>

<?php
    if(isset($_GET['itemid'])){
        $foodid=$_GET['itemid'];
        $sql="SELECT * FROM item WHERE item_id=$foodid";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($res);
        $fname=$row['item_name'];
        $fprice=$row['item_price'];
        $fimg=$row['item_img'];
    }else{
        header("Location:menu.php");
    }
?>
<section class="">
    <div class="container">
        <h2 class="text-center text-white">Your orders</h2>
        <form action="" method="POST" class="order" style="text-align: center;">
                <fieldset>
                    <legend>Selected Menu</legend>

                    <div class="food-menu-img" >
                        <?php 
                        
                            //CHeck whether the image is available or not
                            if($fimg=="")
                            {
                                //Image not Availabe
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                //Image is Available
                                ?>
                                <img src="item/<?php echo $fimg; ?>" style="width: 200px; height:140px;" alt="a" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $fname; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $fname; ?>">

                        <p class="food-price">$<?php echo $fprice; ?></p>
                        <input type="hidden" name="price" value="<?php echo $fprice; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">

                </fieldset>
        </form>
    </div>

</section>









<?php
    include("foot.php");
?>
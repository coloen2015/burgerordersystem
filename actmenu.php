<?php
    include("dbcon.php");
    include("head.php");

?>
<?php
   if(isset($_GET['id']));
   $id=$_GET['id'];
   
?>
<section>
<div class="row" style=" width: 100%;text-align:center; margin-top:40px">
            <a href="actorder.php?id=<?php echo $id; ?>"><button class="btn btn-danger" style="font-size:larger;">Press To See Your Order</button></a>
        </div>
</section>

<section>
    <div class="container" style="display: flex; justify-content: center; align-items: center;">
        <div class="row" >
        <?php
                    $sql="SELECT item.*,catagory.c_name FROM item LEFT JOIN catagory ON item.cat_id = catagory.c_id";
                    $res=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
            <div class="col-md-3 col-sm-3">
                
            <div class="card" style="width: 200px; margin-top: 100px;">
                <img  src="item/<?php echo $row['item_img'];?>" style="height: 150px;" alt="">
                <form action="" method="post" style="text-align:center; border:none;">
                
                    <input type="disable" name="actname" value="<?php echo $row['item_name'];?>">
                    <input type="disable" name="actprice" value="<?php echo $row['item_price'];?>">
                    <input type="disable" name="actcat" value="<?php echo $row['c_name'];?>">
                    <input type="submit" name="buy" class="btn btn-danger" value="Buy Now">
                </form> 
            </div>
            
            </div>
            <?php
                }
            ?>
            <?php
                if(isset($_POST['buy'])){
                    $fname=$_POST['actname'];
                    $mname=$_POST['actcat'];
                    $mount=$_POST['actprice'];

                    include("dbcon.php");
                    $sql="INSERT INTO carttable(f_name, m_name, amount, user_id) VALUES ('$fname','$mname','$mount','$id')";
                    mysqli_query($con,$sql);
                    echo ("<script>alert('You ADD this food to order.')</script>");
                }
            ?>
        </div>
        
    </div>
</section>



<?php
    include("foot.php");
?>

<?php
    include("dbcon.php");
?>
<?php
    include("head.php");
?>

<?php

if(isset($_GET['category_id'])){
$cid=$_GET['category_id'];


$sql="SELECT * FROM catagory WHERE c_id=$cid";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$cname=$row['c_name'];}

?>


<div class="container-fluid">
   
        <h3 class="text-center" style="padding-top: 150px;"><?php echo $cname;?></h3>
        <div class="row">
            
                
                
                <?php
                if(isset($_GET['category_id'])){
                $cid=$_GET['category_id'];
                
                
                $sql="SELECT * FROM catagory WHERE c_id=$cid";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($res);
                $cname=$row['c_name'];}
                
                
                    $sql2="SELECT * FROM item WHERE cat_id='$cid'";
                    $res2=mysqli_query($con,$sql2);
                    while($row2=mysqli_fetch_assoc($res2)){?>
                    
                    <div class="col-xl-4" style="display: flex;justify-content: center;align-items: center;flex-direction: column;padding: 50px">
                        
                        <form method="post" style="width:300px;">
                        <img src="item/<?=$row2['item_img']?>" style="height: 150px;padding-left:50px;" alt="">
                        <h5 class="text-center"><?=$row2['item_name']?></h5>
                        <h5 class="text-center"><?=number_format($row2['item_price']);?></h5>
                        <input type="hidden" name="name" value="<?=$row2['item_name']?>">
                        <input type="hidden" name="price" value="<?=$row2['item_price']?>">
                        
                       
                        </form>
                        <a href="signup.php"><Button class="btn btn-danger" style="margin-top: 20px;">Buy Now</Button></a>
                    </div>
                <?php
                    }
                ?> 
                    
            </div>
            
        </div>
  









<?php
    include("foot.php");
?>
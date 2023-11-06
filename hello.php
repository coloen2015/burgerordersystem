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
                $cname=$row['c_name'];}?>
   
    
    <section class="food-menu" >
        <div class="container">
           
            <div class="col-xl-6 left">
            <h2 id="name" class="text-center text-danger" style="padding-top: 100px;"><?php echo $cname ?></h2>
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $sql2="SELECT * FROM item WHERE cat_id=$cid";
                    $res2=mysqli_query($con,$sql2);
                
                
                    while($row2=mysqli_fetch_assoc($res2)){
                        $iid=$row2['item_id'];
                        $iname = $row2['item_name'];
                        $iprice = $row2['item_price'];
                        
                        $iimg = $row2['item_img'];
                        ?>

                        <div class="row">
                            <div class="col-md-4">
                                    <form action="imenu?id=<?php echo$row2['item_id']?>" method="post">
                                        <?php
                                            if($iimg==""){

                                            }else{
                                        ?>
                                            <img name="img" style="width: 200px;" src="item/<?php echo $iimg; ?>" alt="" class="img-responsive img-curve">
                                        <?php 
                                            }
                                        ?>
                                        <h3><?php echo $iname;?></h3>
                                        <p id="price" class="food-price">$<?php echo $iprice; ?></p>
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="hidden" name="name" value="<?php $iname?>">
                                        <input type="hidden" name="price" value="<?php $iprice?>">
                                        <input type="submit" name="add_to_cart" class="btn btn-danger" value="Add To Cart">
                                    </form>
                                
                            </div>
                        </div>
                        <?php      
                            }
                        ?>
                </div>
            </div>
            
                        <!-- <div class="food-menu-box" style="width: 250px;
                                    height:400px;
                                    margin: 1%;
                                    
                                    float: left;
                                    background-color: white;
                                    border-radius: 15px;
                                    text-align: center;">
                            <div class="food-menu-img" style="width: 200px; height:140px;
                                                        float: left;"     >
                                <?php
                                    if($iimg==""){

                                    }else{
                                        ?>
                                       <img style="width: 200px;" src="item/<?php echo $iimg; ?>" alt="" class="img-responsive img-curve">
                                        <?php 
                                            }
                                        
                                        
                                 ?>
                                
                            </div>
                            <div class="food-menu-desc" style="width: 70%;
                                            padding-top:50px;
                                            float: left;
                                            ">
                                
                                <h4><?php echo $iname; ?></h4>
                                <p id="price" class="food-price">$<?php echo $iprice; ?></p>
                                
                                <br>
                                <input type="number" name="quantity" value="1" class="form-control">

                                <a href="order.php?itemid=<?php echo $iid; ?>" style=" margin-top:20px; " class="btn btn-danger">Order Now</a>
                            </div>
                        </div> --> 
                     
            </div>
            <div class="col-md-6 right">
                <h2 class="text-center">Item selected</h2>
                    <?php
                        session_start();
                        if(isset($_POST['add_to_cart'])){
                            $id=$row['id'];
                            $img=$row['img'];
                            $name=$row['name'];
                            $price=$row['price'];
                        }
                    ?>
            </div>
                    
        </div>
    </section>
<?php
    include("foot.php");
?>





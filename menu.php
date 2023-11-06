<?php 
    include("dbcon.php");
    
?>
<?php
    include("head.php");
?>

    <section class="categories"  >
        <div class="container" >
            <h2 style="margin-top: 200px;" class="text-center">MENU</h2>
            <?php
                $sql="SELECT * FROM `catagory`";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['c_id'];
                    $title=$row['c_name'];
                    $img=$row['c_img'];?>
                    <a style="margin-bottom: 200px; width:320px; height:300px; float:left;text-decoration: none; " href="imenu.php?category_id=<?php echo $id; ?>&id2=<?php $id; ?>">
                            <div class="" style="width:300px;">
                                
                                <div class="card" style="width:300px; border-radius: 20px;  ">
                                <?php 
                                    if($img=="")
                                    {
                                        
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        
                                        ?>
                                        <img src="item/<?php echo $img; ?>" style="width:300px; height:280px;"  class="img-reponsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 style="text-align:center; text-decoration: none;" class="float-text  text-black" ><?php echo $title; ?></h3>
                                </div>
                                
                            </div>
                        </a>
                    

                <?php
                    }
                
                ?>
           
        </div>
    </section>


    

    <?php
    include("foot.php");
?>
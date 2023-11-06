<?php
include("dbcon.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
?>
<?php
    if(isset($_POST['save'])){
        $name=$_POST['iname'];
        $price=$_POST['iprice'];
        $cat=$_POST['icat'];
        $oldimg=$_POST['oimg'];
        $newimg=$_POST['nimg'];

        if($newimg!=""){
            $sql="UPDATE item SET item_name='$name',item_price='$price',cat_id='$cat',item_img='$newimg' WHERE item_id='$id'";
            mysqli_query($con,$sql);
            header("Location:item.php");
        }else{
            $sql="UPDATE item SET item_name='$name',item_price='$price',cat_id='$cat',item_img='$oldimg' WHERE item_id='$id'";
            mysqli_query($con,$sql);
            header("Location:item.php");
        }
    }
?>

<?php
    include("ahead.php");

?>

            <div class="container mt-3">
                <h1 class="text-center">Item</h1>

                <form method="POST">
                    <?php
                        $sql="SELECT * FROM item WHERE item_id='$id'";
                        $res=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Item Name</label>
                                <input type="text" value="<?php echo $row['item_name'];?>" name="iname" class="form-control" id="exampleFormControlInput1" placeholder="Itemname" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input type="number" value="<?php echo $row['item_price'];?>" name="iprice" class="form-control" id="exampleFormControlInput1" placeholder="price" required>
                            </div>
                            <div class="form-group"> 
                            <label for="exampleFormControlInput1">Images</label>
                            <input type="text" value="<?php echo $row['item_img'];?>" name="oimg" class="form-control" id="exampleFormControlInput1">
                            <label for="exampleFormControlInput2">Choose Image </label>
                               <input type="file" name="nimg" class="form-control" id="exampleFormControlInput2">


                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Choose Catagory</label>
                                <select name="icat" class="form-control" id="exampleFormControlSelect1">
                                <?php 
                                    $sql = "SELECT * FROM catagory";
                                    $res = mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_assoc($res)):
                                    ?>
                                    <option value="<?php echo $row['c_id'];?>">
                                    <?php echo $row['c_name'];?></option>
                                <?php endwhile;?>
                                    
                                </select>
                            </div>
                            
                           
                            
                            
                            
                            <input type="submit" name="save" value="Save" class="btn btn-success">
                </form>
                <?php endwhile;?>
                
            </div>
           
                    
                    
            
                    
                    
                    
                   


        </div>
        <?php
    include("afoot.php");
   ?>
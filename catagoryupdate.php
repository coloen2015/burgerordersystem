<?php
include("dbcon.php");
    if(isset($_GET['cid'])){
        $id=$_GET['cid'];
    }
?>
<?php
    if(isset($_POST['save'])){
        $name=$_POST['cname'];
        
        $oldimg=$_POST['oimg'];
        $newimg=$_POST['nimg'];

        if($newimg!=""){
            $sql="UPDATE catagory SET c_name='$name',c_img='$newimg' WHERE c_id='$id'";
            mysqli_query($con,$sql);
            header("Location:catagory.php");
        }else{
            $sql="UPDATE catagory SET c_name='$name',c_img='$oldimg' WHERE c_id='$id'";
            mysqli_query($con,$sql);
            header("Location:catagory.php");
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
                        $sql="SELECT * FROM catagory WHERE c_id='$id'";
                        $res=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res)):
                    ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Category Name</label>
                                <input type="text" value="<?php echo $row['c_name'];?>" name="cname" class="form-control" id="exampleFormControlInput1" placeholder="Itemname" required>
                            </div>
                            
                            <div class="form-group"> 
                            <label for="exampleFormControlInput1">Images</label>
                            <input type="text" value="<?php echo $row['c_img'];?>" name="oimg" class="form-control" id="exampleFormControlInput1">
                            <label for="exampleFormControlInput2">Choose Image </label>
                               <input type="file" name="nimg" class="form-control" id="exampleFormControlInput2">


                            </div>
                            
                            
                           
                            
                            
                            
                            <input type="submit" name="save" value="Save" class="btn btn-success">
                </form>
                <?php endwhile;?>
                
            </div>
           
                    
                    
            
                    
                    
                    
                   


        </div>
        <?php
    include("afoot.php");
   ?>
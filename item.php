<?php 
    include('dbcon.php');
?>




<?php
    include("ahead.php");

?>

            <div class="container mt-3">
                <h1 class="text-center">Item</h1>

                <form method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Item Name</label>
                                <input type="text" name="iname" class="form-control" id="exampleFormControlInput1" placeholder="Itemname" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input type="number" name="iprice" class="form-control" id="exampleFormControlInput1" placeholder="price" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Choose Catagory</label>
                                <select name="icat" class="form-control" id="exampleFormControlSelect1">
                                    <option >Choose Category</option>
                                    <?php 
                                        $sql = "SELECT * FROM `catagory`";
                                        $res = mysqli_query($con, $sql);
                                        while($row=mysqli_fetch_assoc($res)):
                                    ?>
                                    <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
                                    
                                    <?php endwhile;?>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Images</label>
                                <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="img">
                            </div>
                            
                            
                            <input type="submit" name="save" value="Add" class="btn btn-success">
                </form>
                <?php
                    if(isset($_POST['save'])){
                        $name=$_POST['iname'];
                        $price=$_POST['iprice'];
                        $cat=$_POST['icat'];
                        $img=$_POST['image'];
                        $con=mysqli_connect("localhost","root","","finalboss");
                        
                        $sql="INSERT INTO item(item_name, item_price, cat_id, item_img) VALUES ('$name','$price','$cat','$img')";
                        mysqli_query($con,$sql);
                        

                    }
                ?>
                
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item ID</th>
                            <th scope="col">Item Name</th>
                            <th>Item Price</th>
                            <th>Category</th>
                            
                            <th>Image</th>
                            <th scope="col" colspan="2" style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT item.*,catagory.c_name FROM `item` LEFT JOIN catagory ON item.cat_id=catagory.c_id";
                                $res = mysqli_query($con ,$sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row['item_id'];?></td>
                                <td><?php echo $row['item_name'];?></td>
                                <td><?php echo $row['item_price'];?></td>
                                
                                <td><?php echo $row['c_name'];?></td>
                                <td><img src="item/<?php echo $row['item_img'];?>" width="100px" alt=""></td>
                                <td><a href="itemupdate.php?id=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-success">Edit</button></a></td>
                                <td><a href="itemdelete.php?id=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                            </tr>
                            <?php  
                                $i++;
                                endwhile;
                                
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
           
                    
                    
            </main>
                    
                    
                    
                   


        </div>
        <?php
    include("afoot.php");
   ?>
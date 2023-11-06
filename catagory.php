
<?php
    include("ahead.php");

?>

            <div class="container mt-3">
                <h1 class="text-center">Item</h1>

                <form method="POST">
                <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category ID</label>
                        <div class="col-sm-10">
                        <input type="text" name="catid"  class="form-control" id="staticEmail" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="catname" class="form-control" id="inputPassword" placeholder="Enter Category Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Images</label>
                        <input type="file" name="catimg" class="form-control" id="exampleFormControlInput1" placeholder="img">
                    </div>
                            
                            
                            
                            
                            <input type="submit" name="save" value="Add" class="btn btn-success">
                </form>
                <?php 
                            if(isset($_POST['save'])){
                                $cname=$_POST['catname'];
                                $cimg=$_POST['catimg'];
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql="INSERT INTO `catagory`(`c_name`, `c_img`) VALUES ('$cname','$cimg')";
                                mysqli_query($con,$sql);

                            }



                        ?>

<div class="table">
                <h2>Category Lists</h2>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Image</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT * FROM `catagory`";
                                $res = mysqli_query($con ,$sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td><?php echo $row['c_id'];?></td>
                                <td><?php echo $row['c_name'];?></td>
                                <td><img src="item/<?php echo $row['c_img'];?>" width="100px" alt=""></td>
                                <td><a href="catagoryupdate.php?cid=<?php echo $row['c_id'];?>"><button type="submit" class="btn btn-success">Edit</button></a></td>
                                <td><a href="catagorydelete.php?cid=<?php echo $row['c_id'];?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                            </tr>
                            
                            <?php  endwhile;?>
                        </tbody>
                    </table>
            </div>
            </div>
            
            
            
           
            </div>
            
                    
                    
                    
                   


        </div>
        <?php
    include("afoot.php");
   ?>        
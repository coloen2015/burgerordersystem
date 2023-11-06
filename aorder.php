<?php
    include("ahead.php");

?>
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-center">Order Table</h3>
            <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Ph.no.</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Item</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT ordertable.*,user.* FROM `ordertable` LEFT JOIN user ON ordertable.user_id=user.user_id";
                                $res = mysqli_query($con ,$sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row['user_name'];?></td>
                                <td><?php echo $row['user_ph'];?></td>
                                <td><?php echo $row['user_mail'];?></td>
                                <td><?php echo $row['item_name'];?></td>
                                <td><?php echo $row['cat_name'];?></td>
                                
                                <td><?php echo $row['o_price'];?></td>
                                
                                
                                <td><a href="aorderdelete.php?oid=<?php echo $row['o_id'];?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                            </tr>
                            <?php  
                                $i++;
                                endwhile;
                                
                            ?>
                        </tbody>
                    </table>
        </div>
    </div>



<?php
    include("afoot.php");
   ?>
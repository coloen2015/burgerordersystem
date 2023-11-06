<?php
include("dbcon.php");
    if(isset($_GET['oid'])){
        $id=$_GET['oid'];
    }
?>
<?php
    if(isset($_POST['save'])){
        $name=$_POST['name'];
        $ph=$_POST['ph'];
        $mail=$_POST['mail'];
        $iname=$_POST['iname'];
        $cname=$_POST['cname'];
        $oprice=$_POST['oprice'];
        
        
    }
?>

<?php
    include("ahead.php");

?>

<div class="container">
        <div class="col-md-12">
            <h3 class="text-center">Order Table</h3>
            <form method="POST">
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT * FROM `ordertable` WHERE o_id=$id";
                                $res = mysqli_query($con ,$sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" value="<?php echo $row['user_name'];?>" name="name" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ph.no</label>
                                <input type="number" value="<?php echo $row['user_ph'];?>" name="ph" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Mail</label>
                                <input type="text" value="<?php echo $row['user_mail'];?>" name="mail" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Item</label>
                                <input type="text" value="<?php echo $row['item_name'];?>" name="iname" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Catageory</label>
                                <input type="text" value="<?php echo $row['cat_name'];?>" name="cname" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input type="text" value="<?php echo $row['o_price'];?>" name="oprice" class="form-control" id="exampleFormControlInput1"  >
                            </div>

                            <input type="submit" name="save" value="Save" class="btn btn-success">
                            
                                
                                    
                               
                            
                            
                           
                            
                            
                            
                            
                </form>
                <?php endwhile;?>
        </div>
    </div>            
           
                    
                    
            
                    
                    
                    
                   


        
<?php
    include("afoot.php");
?>
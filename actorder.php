<?php
    include("dbcon.php");
    include("head.php");

?>
<?php
    if(isset($_GET['id']));
    $id=$_GET['id'];
?>


<style>
    input{
        border: none;
        outline: none;
    }
    #del{
        background-color: red;
        padding: 5px 10px;
        border-radius: 5px;
    }
    #buy{
        background-color: greenyellow;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<section>
    <div class="container">
        <div class="row">
        <table class="table">
                        <thead>
                            <tr>
                            
                            
                            <th scope="col">id</th>
                            <th>name</th>
                            <th>Catagory</th>
                            
                            <th>price</th>
                            <th scope="col" colspan="2" style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="post" >
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT * FROM carttable WHERE user_id='$id'";
                                $res = mysqli_query($con ,$sql);
                                $x = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <th scope="row"><input type="text" name="c_id" value="<?php echo $row['cart_id'];?>"></th>
                                <td><input type="disable" name="f_name[]" value="<?php echo $row['f_name'];?>"></td>
                                <td><input type="disable" name="m_name[]" value="<?php echo $row['m_name'];?>"></td>
                                <td><input type="disable" name="u_id[]" value="<?php echo $row['user_id'];?>"></td>
                                
                                <td><input type="disable" name="m_oney[]" value="<?php echo $row['amount']; echo "    Kyats";?>"></td>
                                
                                <td><input id="del" type="submit"  name="delete" value="Delete" ></td>
                            </tr>
                            <?php  
                                $x++;
                                endwhile;
                                
                            ?>

                            <input type="submit" id="buy" style="margin-top:50px; color: Black;" name="buynow" value="Buy Now!" >

                            <tr>
                                <th>
                                    <td>Total amount - </th>
                                        <?php
                                            $i = 0;
                                            $sql = "SELECT * FROM carttable WHERE user_id='$id'";
                                            $res = mysqli_query($con ,$sql);
                                            while($row2 = mysqli_fetch_assoc($res)){
                                                $i += $row2['amount'];

                                            } echo $i;
                                            echo "    Kyats";
                                        ?>
                                    </td>
                                
                            </tr>
                        </form>
                        </tbody>
                    </table>
                    <a href=""><button type="button" id="cleartable" class="btn btn-danger">Clear Order</button></a>
        </div>
    </div>
</section>

<?php
    if(isset($_POST['buynow'])){
        $fname=$_POST['f_name'];
        $mname=$_POST['m_name'];
        $money=$_POST['m_oney'];
        $uid=$_POST['u_id'];
        include("dbcon.php");
        for($i=0; $i < count($fname);$i++){
            $f_name=$con->real_escape_string($fname[$i]);
            $m_name=$con->real_escape_string($mname[$i]);
            $m_money=$con->real_escape_string($money[$i]);
            $us_id=$con->real_escape_string($uid[$i]);
            $sql="INSERT INTO ordertable (item_name,user_id, cat_name, o_price) VALUES ('$f_name','$us_id','$m_name','$m_money')";
            $query = mysqli_query($con,$sql);
        }
        if($query){
                
            $sql2="DELETE FROM carttable WHERE user_id = $us_id";
            $res3=mysqli_query($con,$sql2);
            if($res3){
                echo "<script> alert('Order Complete!') </script>";
            }

        }
    }
?>

<?php
    if(isset($_POST['delete'])){
        $c_id=$_POST['c_id'];

        $con=mysqli_connect("localhost","root","","finalboss");
        $sql="DELETE FROM carttable WHERE cart_id='$c_id'";

        mysqli_query($con,$sql);
        echo ("<script>alert('item is deleted')</script>");
        // header("Location:actorder.php");
       
    }
?>


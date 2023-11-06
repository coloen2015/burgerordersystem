<?php
    session_start();  
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
        exit();
    }  
    include("ahead.php");

?>
            <main class="col-10">
                
                <div class="container-fluid mt-3 p-4">
                
                    <h2>User Lists</h2>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">User ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Phone Number</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","finalboss");
                                $sql = "SELECT * FROM user";
                                $res = mysqli_query($con ,$sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td><?php echo $row['user_id'];?></td>
                                
                                <td><?php echo $row['user_name'];?></td>
                                <td><?php echo $row['user_ph'];?></td>
                                <td><?php echo $row['user_mail'];?></td>
                                <td><?php echo $row['user_type'];?></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                        </table>
                </div>
            </main>
        </div>
   <?php
    include("afoot.php");
   ?>
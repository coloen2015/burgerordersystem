<?php
    include("head.php");
?>
<style>
    .signup{
        width: auto;
        
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        
    }
    
</style>
    <div class="container signup mt-5">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" required name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
    
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" required name="uph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
    
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" required name="umail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" required name="upass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <a href="user_login.php" style="text-decoration: none; font-size:large;">Login</a>
            <button style="float: right; margin-top: 50px;" type="submit" name="signup" class="btn btn-danger">Sign Up</button>
        </form>
    </div>


    <?php
        if(isset($_POST['signup'])){
            $name=$_POST['uname'];
            $ph=$_POST['uph'];
            $pass=$_POST['upass'];
            $email=$_POST['umail'];
       
            $con= mysqli_connect("localhost","root","","finalboss");


            $sql = "INSERT INTO user(user_name, user_ph, user_mail, user_pass) VALUES ('$name','$ph','$email','$pass')";
            mysqli_query($con, $sql);
         }
    ?>

<?php
    include("foot.php");
?>
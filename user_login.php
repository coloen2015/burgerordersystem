<?php
    session_start();

    
?>
<?php
    include("head.php");
?>
<style>
    .login{
        width: auto;
        
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 100px;
        
    }
    
</style>    
<section class="login">
            <form method="post">
        <div class="form-group">
            <h3>Login For user</h3>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="umail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="upass" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <!-- <a href="signup.php"  style="text-decoration: none; color:red;">sign up</a> -->
        <input type="submit" style="float: right; margin-top: 50px;" name="login" class="btn btn-danger" value="Login">
        
        </form>
        <a href="index.php"><button style="border-radius: 20px; width: 200px; height: 50px; background-color: #0A1627;color: #FE0039; margin-top:50px; ">Go Back Home</button></a>

</section>

<?php 
if(isset($_POST['login'])){
    $mail=$_POST['umail'];
    $pass=$_POST['upass'];

    $con=mysqli_connect("localhost","root","","finalboss");
    $sql="SELECT * FROM user WHERE user_mail='$mail' AND user_pass='$pass'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)==1){
        $row=mysqli_fetch_assoc($res);
        if($row['user_type'] == 'YES'){
            $_SESSION['umail']=$row['user_mail'];
            $_SESSION['upass']=$row['user_pass'];
            $_SESSION['login']=true;
            header("Location:admin.php");

        }else if($row['user_type'] == 'NO'){
            $_SESSION['umail']=$row['user_mail'];
            $_SESSION['upass']=$row['user_pass'];
            $_SESSION['login']=true;

            $con=mysqli_connect("localhost","root","","finalboss");
            $sql2="SELECT * FROM user WHERE user_mail = '$mail'";
            $res2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($res2);
            $id=$row2['user_id'];
            header("Location:actmenu.php?id={$id}");
        }else{
            echo "erroruoiiiiiiiiiiiiiiiiiiiiiiiiiiiii";
        }
    }
} ?>
    
<    <?php
    include("foot.php");
?>
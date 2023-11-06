<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <section class="nav">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-12 left">
                    <a href="index.php"><img src="item/logo.png" alt=""></a>
                </div>
                <div class="col-xl-6 col-sm-12 right">
                    <nav>
                        <div class="dropdown">
                            <a href="menu.php"><button class="menubtn">Menu</button></a>
                              
                            <div class="menucontant">
                            <?php
                            include("dbcon.php");
                            $sql="SELECT * FROM `catagory`";
                            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                            $id=$row['c_id'];
                            $title=$row['c_name'];
                            $img=$row['c_img'];?>
                                <a class="link-hide" href="imenu.php?category_id=<?php echo $id; ?>"><?php echo $title;?></a>
                                <?php
                            }
                            ?>
                            </div>
                            
                        </div>
                        
                        
                        
                        <a class="link" href="aboutus.php">About Us</a>
                        <a href="login.php" style="padding-left: 400px;">
                            <i class="fa-solid fa-right-to-bracket" style="color: #fe0039;"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 left">
                    <h3><a href="">Menu</a></h3>
                    <?php
                            include("dbcon.php");
                            $sql="SELECT * FROM `catagory`";
                            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                            $id=$row['c_id'];
                            $title=$row['c_name'];
                            $img=$row['c_img'];?>
                            <ul>
                                <li>
                                <a class="" href="imenu.php?category_id=<?php echo $id; ?>"><?php echo $title;?></a>
                                </li>
                            </ul>
                                <?php
                            }
                            ?>
                    
                </div>
                <div class="col-xl-2 mid">
                    <h3>About Us</h3>
                    <span>Min Thant Kyaw</span><br> 
                    <span>(Founder)</span> <br>        
                    <span>YHA Computer</span><br> 
                    <span>(Adviser)</span>
                </div>    
                        
                    
                <div class="col-xl-8 right">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-telegram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-viber"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="footer2">
        <h5>© 2017 - 2023 King’s Men. All Rights Reserved</h5>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
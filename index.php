    <?php include('partials-front/menu.php'); ?>

    
    
    <H1 class="notification_msg"> <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?></H1>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
        <!-- message Notification  -->

    

    
    </section>
    




    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container2">
            <h2 class="text-center">Top Ventes</h2>
            
            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 8";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/category/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title;?></h4>
                            <p class="ordre-number">5 ordres</p>
                            <p class="food-price">$<?php echo $price; ?></p>
                            <br>
                        </div>
                        </a>
                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>



            
            
        </div>
       

        
    </section>
    <p style="background-color: #2222223a;" class="text-center">
                <a style=" color: black; ;   font-size:20px" href="<?php echo SITEURL; ?>foods.php">See All Foods</a>
            </p>
            <div class="clearfix"></div>
    <!-- fOOD Menu Section Ends Here -->

    <h1 class="title-partenaire"> Ils nous ont fait confiance ! </h1>
    <div class="partenair">

        <img class="partenaire-img" src="images/partenaire/partenair1.png" alt="">
        <img class="partenaire-img" src="images/partenaire/partenair2.png" alt="">
        <img class="partenaire-img" src="images/partenaire/partenair3.png"alt="">
        <img class="partenaire-img" src="images/partenaire/partenair4.jpg" alt="">
        <img class="partenaire-img" src="images/partenaire/partenair5.png"alt="">
        <img class="partenaire-img" src="images/partenaire/partenair6.jpg" alt="">
    </div>    

    <?php include('partials-front/footer.php'); ?>
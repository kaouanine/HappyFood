
<div class="list-category">
      <?php 

                //Display all the cateories that are active
                //Sql Query
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether categories available or not
                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        

                            <a  class="category-item" href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                                <div  >
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else{?>
                                        <img class="category-img" src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="">
                                        <?php
                                    }
                                ?>
                                    <?php echo $title; ?>

                                </div>
                            </a>
            <?php
                    }
                }
                else
                {
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
</DIv>







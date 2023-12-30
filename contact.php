<?php include('partials-front/menu.php'); ?>

<section class="food-search text-center">
<form class="contact-input1" id="Contact-us" method="post" >


<table style="width :100%;max-width:550px;border:0;" cellpadding="11" cellspacing="30">
<tr> <td>
<label style="color : white;" for="Name">Name*:</label>
</td> <td>
<input class="input-responsive cont" name="Name" rowstype="text" maxlength="60" style="width:250px;max-width:250px;" />
</td> </tr> <tr> <td>
<label style="color : white;" for="PhoneNumber">Phone number:</label>
</td> <td>
<input rows="6"  class="input-responsive cont" name="PhoneNumber" type="text" maxlength="43" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label style="color : white;" for="FromEmailAddress">Email address*:</label>
</td> <td>
<input  class="input-responsive cont" name="EmailAddress" type="text" maxlength="90" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label style="color : white;" for="Comments">Comments*:</label>
</td> <td>
<textarea  class="input-responsive " name="Comments" rows="6" cols="40" style="width:100%;max-width:250px;margin-left:33px"></textarea>
</td> </tr> <tr> <td>

</td> <td>
<input class="btn1 btn-primary" name="Submit" type="submit" value="Submit" style="margin-left: 33px;" />
</td> </tr>
</table>
</form>
    </section>
    <!-- import data in tbl_contact -->

    <?php
    if (isset($_POST['Submit'])){ 
        $name=$_POST['Name'];
        $phone_number=$_POST['PhoneNumber'];
        $email=$_POST['EmailAddress'];
        $comments=$_POST["Comments"];
        $order_date = date("Y-m-d h:i:sa");
        //insert data
        
        $sql="INSERT INTO tbl_contact SET
                name='$name',
                phone_number='$phone_number',
                email_address='$email',
                Comments='$comments',
                order_date='$order_date'
            ";
             //Execute the Query
            $res = mysqli_query($conn, $sql);
            if($res=true){
                $_SESSION['order'] = "<div class='success text-center'>Message envoyé.</div>";
                header('location:'.SITEURL);
                }
            else{
             //Failed to Save Order
            $_SESSION['order'] = "<div class='error text-center'>Message Non envoyé.</div>";
            header('location:'.SITEURL);
                }
            
        }

    ?>

    
<?php include('partials-front/footer.php'); ?>
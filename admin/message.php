<?php include('partials/menu.php'); ?>
<div class="main-content">
<div class="wrapper">
<h1 class="title_msg" >Boite de Messages</h1>
<section  class="hero-msg-item">
    
<!--get all messages from DB -->
<?php 
        $sql='SELECT * from tbl_contact order by order_date';
        $res = mysqli_query($conn, $sql);
        //Count the Rows to check whether the id is valid or not
        $count = mysqli_num_rows($res);?>
         <h1 class="notification_msg"><?php
         if(isset($_SESSION['no-category-found']))
         {
             echo $_SESSION['no-category-found'];
             unset($_SESSION['no-category-found']);
         }?>
         </h1><?php
        if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }
        if($count>0){
            while($row=mysqli_fetch_assoc($res)){
                $name=$row['name'];
                $email=$row['email_address'];
                $phone_number=$row['phone_number'];
                $order_date=$row['order_date'];
                $comments=$row['Comments'];
                $id=$row['id'];?>


                <a  class="message" href='message-detail.php?msg_id=<?php echo($id)?>'>
                    <span style="text-align: left;width: 20%;" class="name m"><?php echo($name)?></span>
                    <span style="width: 70%;  background-color:rgba(233, 227, 227, 0.897);" class="msg m"><?php echo($comments)?></span>
                    <span style="text-align:right;width: 10%;" class="msg_date m "><?php echo($order_date)?></span>
                </a>

           <?php }

        }else{?><div class='error'> No Message .</div>

            <?php }

            ?> 
</section>
</div>
</div>

<?php include('partials/footer.php')?>
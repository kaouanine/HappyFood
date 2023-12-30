<?php include('partials/menu.php'); ?>
<div class="main-content">
<div class="wrapper">
<div class="msg_detail">
    <form class="all-info-costomer" method="POST">
        <div >

        <?php
            
            if(isset($_GET['msg_id'])){
            $id=$_GET['msg_id'];
            $sql="SELECT * FROM tbl_contact WHERE id=$id";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1 ){
                $row = mysqli_fetch_assoc($res);
                $name=$row['name'];
                $email=$row['email_address'];
                $phone_number=$row['phone_number'];
                $order_date=$row['order_date'];
                $comments=$row['Comments'];?>
                
        
        <img src="" alt="<?php echo($name);?>" ><br>
        <img src="" alt="<?php echo($phone_number);?>"><br>
        <img src="" alt="<?php echo($order_date);?>"><br>
        <img src="" alt="<?php echo($email);?>"><br>
        </div>
        <div  class="all-msg">
            <br>
            <div style="word-break: break-word;" ><?php echo($comments);?></div>
        </div>

        <?php }
                else
                {
                    //redirect to manage category with session message
                    $_SESSION['no-category-found'] = "<div class='error'>Message not Found.</div>";
                    header('location:'.SITEURL.'admin/message.php');
                }}?>

                <!--       delete message -->
                <input style="background-color: brown; width :fit-content; padding:5px; color:white ;cursor:pointer"  name="submit" type="submit" value="Suprimer">


                


    </form>
    <?php  if(isset($_POST['submit'])){ 
    $sql2="DELETE FROM tbl_contact WHERE id=$id";
    $res2 = mysqli_query($conn, $sql2);
    
    if($res2==true ){
        $_SESSION['no-category-found'] = "<div class='error'>Message Suprimer</div>";
        header('location:'.SITEURL.'admin/message.php');
    }else{
        $_SESSION['no-category-found'] = "<div class='error'>Error</div>";
        header('location:'.SITEURL.'admin/message.php');
    }}
    ?>
</div>
</div>

<?php include('partials/footer.php')?>
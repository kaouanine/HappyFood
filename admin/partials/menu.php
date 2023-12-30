<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul class="menu_ul">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="message.php">Message</a></li>
                    <li><a href="manage-category.php">Catégorie</a></li>
                    <li><a href="manage-food.php">Food</a></li>
                    <li><a href="manage-order.php">Commande</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->
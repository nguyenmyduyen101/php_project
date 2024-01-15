<?php 
    session_start();
    if (isset($_SESSION['cart'])){
        //echo var_dump($_SESSION['cart']); 
        showcart($_SESSION['cart']);
    }
?>
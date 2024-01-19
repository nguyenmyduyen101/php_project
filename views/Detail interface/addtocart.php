<?php
    session_start();
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
        //lấy giá trị
        $img=$_POST['img'];
        $namepd=$_POST['namepd'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $sl=1;
        //tạo mảng con
        $sp=array($id,$img,$namepd, $price, $sl);
        //add vào giỏ hàng
        //$_SESSION['cart']['']=$sp;
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$sp);
        header('location: viewcart.php');
    } 
 ?>
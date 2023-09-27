<?php 
    require 'config.php';
    $Name = $_POST["tenSach"];
    $lop = $_POST["lop"];
    $hoTen = $_POST["hoten"];
    $query = "INSERT INTO ds (TenSach,lop,hoten) VALUES ('$Name','$lop','$hoTen')";
    connect($query);
    header("location:List_ThuVien.php");
?>
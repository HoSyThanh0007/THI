<?php   
   require "config.php";
   $id=$_POST["ma"];
   $tensach=$_POST["tensach"];
   $lop=$_POST["lop"];
   $hoten=$_POST["hoten"];
   $query=" UPDATE ds set TenSach='$tensach', lop='$lop',hoten='$hoten' where ma='$id'";
   connect($query);
   header('location: List_ThuVien.php');
   ?>
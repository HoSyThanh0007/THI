<?php 
    require "config.php";
    $id = $_GET["Ma"];
    $query = "DELETE FROM ds WHERE Ma =$id";
    connect($query);
    header("location:List_ThuVien.php");
?>

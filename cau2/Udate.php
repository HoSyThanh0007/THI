<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
   
    h1{
        margin-left: 500px;
    }
        body{
            font-size: 16px;
        }
        table{
            
            border: 1px solid #ccc;
        }
        tr,td{
            padding: 10px;
        }
    table {
    position: absolute;
    top: 100px;
    left: 400px;
        }  
    button {
        padding: 7px;
        width: 60px;
        background-color: #3498db; 
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s; 
        margin-bottom: 5px;
        }

    button:hover {
        background-color: #2980b9; 
        color: #fff; 
    }
    </style>
<?php 
    require "config.php";
    $user=$_GET["Ma"];

?>
    <form action="ctr_Update.php" method="POST">
   <table>
     <tr>
        <th colspan="2" align="center"><h3>Sửa thư viện</h3></th>
     </tr>
    <tr>
        <th>Mã :</th>
     <td>
     <input type="text" name="ma" value="<?php echo $user?>">
    </td>
    </tr>
    <tr>
    <th>Tên sách </th>
      <td><input type="text" name="tensach"></td>
    </tr>
    <th>Lớp</th>
      <td><input type="text" name="lop"></td>
    </tr>
    <th>Họ Tên</th>
      <td><input type="text" name="hoten"></td>
    </tr>
    <tr>
        <th colspan="2" align="center">
            <button>Update</button>
        </th>
    </tr>
   </table>
   </form>
</body>
</html>
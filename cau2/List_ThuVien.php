
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach tin tuc</title>
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
    <h1>Danh sách sinh viên</h1>
    <a href="Them.php" ><button>Thêm</button></a>
    <table border = "1px">
        <tr>
            <th>Mã Sách </th>
            <th>Tên Sách </th>
            <th>Lớp</th>
            <th>Người Mượn</th>
            <th colspan = "2" align = "center">Thao tác</th>
        </tr>
        <?php
               require "config.php";
                $user = "SELECT * FROM ds";
        
            $thuvien = getAll($user);               
            ?>
            
                <?php foreach($thuvien as $tt):?>
        <tr>
            <td>
            <?php echo $tt['Ma'] ?>
            </td>
            <td>
            <?php echo $tt['TenSach'] ?>
            </td>
            <td>
            <?php echo $tt['lop'] ?>
            </td>
            <td>
            <?php echo $tt['hoten'] ?>
            </td>
            <td>
            <a href="Udate.php?Ma=<?php echo $tt["Ma"]?>"><button class="">Update</button></a>        
            </td>
            <td>
              <a href="xoa.php?Ma=<?php echo $tt["Ma"]?>"><button onclick="return confirm('Bạn có chắc muốn xóa')" class="xoa">Xóa</button></a>
            </td>
        </tr>
      <?php endforeach?>
    </table> 
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
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
    require_once "config.php";
    $query= "SELECT Ma FROM ds ORDER BY Ma DESC
    LIMIT 1";
    $sinhvien=getOne($query);
?>
    <div class="container">
    <form action="ctr_them.php" method="POST" enctype="multipart/form-data" >
        <table>
          <tr>
            <th colspan="2" align="center">Thêm sách</th>
          </tr>
          <tr>
            <th>Mã sách:</th>
            <td>
                <input type="text" class="an" value=" <?php echo $sinhvien["Ma"]+1?>">
            </td>
          </tr>
          <tr>
            <th>Tên Sách</th>
            <td>
                <input type="text" name="tenSach">
            </td>
          </tr>
          <tr>
            <th>Tên Lớp:</th>
            <td>
                <input type="text" name="lop">
            </td>
          </tr>
          <tr>
            <th>Người Mượn:</th>
            <td>
                <input type="text" name="hoten">
            </td>
          </tr>
          <tr>
            <th colspan="2" align="center">
                <button>Thêm</button>
            </th>
          </tr>
       </table>
    </form>
    </div>
     
</body>
</html>
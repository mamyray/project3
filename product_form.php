<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body class="">



    <?php
      include "navbar.php";
    ?>
    <h1 class="ab">เพิ่มสินค้า </h1>
    <form action="product_insert.php" method="post" enctype="multipart/form-data"><br />
        ชื่อสินค้า <input type="text" name="name" /><br />
        ราคา <input type="text" name="price" /> <br />
        จำนวนในคลัง <input type="text" name="stock" /> <br />
        ประเภทสินค้า <input type="text" name="cat_name" /> <br />
        รายละเอียด <textarea rows=" 5" cols="50" name="description"> </textarea><br />
        แทรกรูป <input type="file" name="img" /> <br />
        <input type="submit" value="บัณทึก" /><br />
    </form>


</body>

</html>
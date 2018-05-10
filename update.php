<?php

$conn = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");
$sql = "SELECT * FROM product WHERE code='$_GET[code]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form method="post" action="proses_save.php" enctype="multipart/form-data">
        <p>

            <label for="code">Code:</label>

            <input type="text" name="code" id="code" value="<?php echo $row['code']; ?>">

        </p>

        <p>

            <label for="name">Name:</label>

            <input type="text" name="name" id="Name" value="<?php echo $row['name']; ?>">

        </p>

        <p>

            <label for="stock">Stock:</label>

            <input type="text" name="stock" id="stock" value="<?php echo $row['stock']; ?>">

        </p>

        <p>

            <label for="price">Price:</label>

            <input type="text" name="price" id="price" value="<?php echo $row['price']; ?>">

        </p>
        <p>
            <!--<input type="file" name="photo" id="" value="">-->
            <input type="file" name="photo" value="<?php echo $row['photo']; ?>" id = "photo" />
        </p>
   <button type="submit" name="update">Update</button>

    </form>

    </body>

    </html>

<?php

$conn = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");
$sql = "DELETE FROM product
WHERE code='$_GET[code]'";
$result = mysqli_query($conn,$sql);

?>
<html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form action="proses_hapus.php" method="post">

<!--        <p>

            <label for="NIK">NIK:</label>

            <input type="text" name="NIK" id="NIK" value="<?php //echo $row['NIK']; ?>">

        </p>

        <p>

            <label for="name">Name:</label>

            <input type="text" name="name" id="Name" value="<?php //echo $row['name']; ?>">

        </p>

        <p>

            <label for="address">Address:</label>

            <input type="text" name="address" id="address" value="<?php //echo $row['address']; ?>">

        </p>

        <p>

            <label for="salary">Salary:</label>

            <input type="text" name="salary" id="salary" value="<?php //echo $row['salary']; ?>">

        </p>
        
        <p>

            <label for="phone">Phone:</label>

            <input type="text" name="phone" id="phone" value="<?php //echo $row['phone']; ?>">

        </p>
        
        <p>

            <label for="email">Email Address:</label>

            <input type="text" name="email" id="email" value="<?php //echo $row['phone']; ?>">

        </p>
-->
   <button type="submit" name="delete">Delete</button>

    </form>

    </body>

    </html>

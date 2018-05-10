<?php
/*
     if (isset($_GET['edit'])) 
 {

  $SQL = $dbconnect->query ("SELECT * FROM employee WHERE NIK=".$_GET['edit']);

  $getRow = $SQL ->fetch_array();

 }

 if(isset($_POST['update']))

{

  $SQL = $dbconnect->prepare("UPDATE employee SET name=?, address=?, salary=?, phone=?, email=? WHERE NIK=?");

  $SQL->bind_param ($_POST['name'],$_POST['address'],$_POST['salary'],$_POST['phone'],$_POST['email'],$_GET['NIK']);

  $SQL->execute();

}
*/
$conn = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");
$sql = "SELECT * FROM employee WHERE NIK='$_GET[NIK]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form action="proses_update.php" method="post" enctype="multipart/form-data">

        <p>

            <label for="NIK">NIK:</label>

            <input type="text" name="NIK" id="NIK" value="<?php echo $row['NIK']; ?>">

        </p>

        <p>

            <label for="name">Name:</label>

            <input type="text" name="name" id="Name" value="<?php echo $row['name']; ?>">

        </p>

        <p>

            <label for="address">Address:</label>

            <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>">

        </p>

        <p>

            <label for="salary">Salary:</label>

            <input type="text" name="salary" id="salary" value="<?php echo $row['salary']; ?>">

        </p>
        
        <p>

            <label for="phone">Phone:</label>

            <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>">

        </p>
        
        <p>

            <label for="email">Email Address:</label>

            <input type="text" name="email" id="email" value="<?php echo $row['phone']; ?>">

        </p>
        <p>
            <!--<input type="file" name="photo" id="" value="">-->
            <input type="file" name="photo1" value="<?php echo $row['photo1']; ?>" id = "photo1" />
        </p>

   <button type="submit" name="update">Update</button>

    </form>

    </body>

    </html>

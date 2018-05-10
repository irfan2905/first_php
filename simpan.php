<?php
/*//untuk memunculkan data
//var_dump($_POST);

//contoh ambil data 
//var_dump($_POST["price"]);

$servername = "localhost";
$username = "root";
$password = "irfan1234";
$dbname = "alphacrm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, "insert into product(code, name, stock, price ) values($_POST["code"], $_POST["name"], $_POST["stock"], $_POST["price"])");
*/
?>

<?php
/*//untuk memunculkan data
//var_dump($_POST);

//contoh ambil data 
//var_dump($_POST["price"]);

$servername = "localhost";
$username = "root";
$password = "irfan1234";
$dbname = "alphacrm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO employee (NIK, name, address, salary, phone, email)
VALUES ('".$_POST['NIK']."','".$_POST['name']."','".$_POST['address']."','".$_POST['salary']"'.,'".$_POST['phone']."','".$_POST['email']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!doctype html>
<html>
 <!--<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>test</title>

    <?php
    ?>

</head>
<body>
     <?php
    /*if(mysqli_query($conn, $_POST['save'])){
        $sql = "insert into employee (NIK, name, address, salary, phone, e-mail)
        VALUES ('".$_POST[""]."','".$_POST[""]."','".$_POST[""]."','".$_POST[]."','".$_POST[""]."','".$_POST[""]."')";
    }*/

    ?>
<!--
    <form method="post"> 
    <label id="first"> First name:</label><br/>
    <input type="text" name="username"><br/>

    <label id="first">Password</label><br/>
    <input type="password" name="password"><br/>

    <label id="first">Email</label><br/>
    <input type="text" name="email"><br/>

    <button type="submit" name="save">save</button>
    <button type="submit" name="get">get</button>
    </form>

</body>-->


    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $code = mysqli_real_escape_string($link, $_REQUEST['code']);

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $stock = mysqli_real_escape_string($link, $_REQUEST['stock']);
    
    $price = mysqli_real_escape_string($link, $_REQUEST['price']);

    // attempt insert query execution

    $target_dir = "/var/www/html/practice/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $file_name = $_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    //move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)

    $sql = "INSERT INTO product (photo, code, name, stock, price) VALUES ('$file_name', '$code', '$name', '$stock', '$price')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

header('Location: http://localhost/practice/list_barang.php');
    ?>


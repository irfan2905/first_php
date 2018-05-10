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
    
    //$photo = mysqli_real_escape_string($link, $_REQUEST['photo']);
     

    // attempt insert query execution

    $target_dir = "/var/www/html/practice/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $file_name = $_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $sql = "UPDATE product set name='$name', stock='$stock', price='$price', photo='$file_name' where code='$code'";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);
header('Location: http://localhost/practice/list_barang.php');
    ?>
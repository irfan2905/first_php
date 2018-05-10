  <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $NIK = mysqli_real_escape_string($link, $_REQUEST['NIK']);

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $address = mysqli_real_escape_string($link, $_REQUEST['address']);
    
    $salary = mysqli_real_escape_string($link, $_REQUEST['salary']);

    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);

     

    // attempt insert query execution

    $target_dir = "";
    $target_file = $target_dir . basename($_FILES["photo1"]["name"]);
    $uploadOk = 1;
    $file_name = $_FILES["photo1"]["name"];
    move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file);

    $sql = "UPDATE employee set name='$name', address='$address', salary='$salary', phone='$phone', email='$email', photo1='$file_name' where NIK='$NIK'";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);
header('Location: http://localhost/bootstrap_practice/new.php');
    ?>
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

    $sql = "Delete from product where code='$code'";
   
    if(mysqli_query($link, $sql)){

        echo "Records deleted successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);
header('Location: http://localhost/bootstrap_practice/new.php');
    ?>
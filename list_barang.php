<!--

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
$query = mysqli_query($conn, "select * from product");
while($result = mysqli_fetch_array($query)){
    echo $result['name'];
}*/
?>
-->
<html>
<head>
  <title>Equipment</title>
  <script></script>
  <script></script>
</head>
<body>
<table style="width:500px; margin:auto; color:purple; padding:5px;" border="10"; bgcolor="cyan">
    <tr><th colspan="7"><h1>Equipment List</h1></th></tr>
    <tr>
        <td><h2>Photo</h2></td>
        <td><h2>Code</h2></td>
        <td><h2>Name</h2></td>
        <td><h2>Stock</h2></td>
        <td><h2>Price</h2></td>
    <tr>

<?php

$servername = "localhost";
$username = "root";
$password = "irfan1234";
$dbname = "alphacrm";
//var_dump($_GET)
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo"Database Connection Failed";
}

$query = "select * from product";
    $result = mysqli_query($conn,$query); 
while($row = mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td><img src='$row[photo]' width='50' heigth='50' >"."</td>";
    echo"<td>".$row['code']."</td>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['stock']."</td>";
    echo"<td>".$row['price']."</td>";
    echo"<td><a href='update.php?code=$row[code]'><input type='button' name='edit_data' value='Edit Data'/></a></td>";
    echo"<td><a href='delete.php?code=$row[code]'><input type='button' name='delete_data' value='Delete Data'/></a></td>";
    echo"</tr>";
}
?>
    
</table>
    <tr>
        <td> <a href="input.php"><input type="button" name="add data" value="Add Data"/></a></td>
    </tr>
    </body>
</html>
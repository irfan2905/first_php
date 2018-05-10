<html>
    <head>
        <title>Employee</title>
        <script></script>
        <script></script>
    </head>
    <body>
        <table style="width:500px; margin:auto; color:purple; padding:5px;" border="10"; bgcolor="cyan">
            <tr><th colspan="10"><h1>Employee List</h1></th></tr>
            <tr>
                <td><h2>Photo</h2></td>
                <td><h2>NIK</h2></td>
                <td><h2>Name</h2></td>
                <td><h2>Address</h2></td>
                <td><h2>Salary</h2></td>
                <td><h2>Phone</h2></td>
                <td><h2>E-Mail</h2></td>
                <td><h2>Option</h2></td>
            <tr>

                <?php
                /*
                  $servername = "localhost";
                  $username = "root";
                  $password = "irfan1234";
                  $dbname = "alphacrm"; */
//var_dump($_GET)
// Create connection
                $conn = mysqli_connect('localhost', 'root', 'irfan1234', 'alphacrm');
// Check connection
                if (!$conn) {
                    echo"Database Connection Failed";
                }
                $query = "select * from employee";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr>";
                    echo"<td><img src='$row[photo1]' width='100' heigth='150' >" . "</td>";
                    echo"<td>" . $row['NIK'] . "</td>";
                    echo"<td>" . $row['name'] . "</td>";
                    echo"<td>" . $row['address'] . "</td>";
                    echo"<td>" . $row['salary'] . "</td>";
                    echo"<td>" . $row['phone'] . "</td>";
                    echo"<td>" . $row['email'] . "</td>";
                    echo"<td><a href='update_data.php?NIK=$row[NIK]'><input type='button' name='edit_data' value='Edit Data'/></a></td>";
                    echo"<td><a href='delete_data.php?NIK=$row[NIK]'><input type='button' name='delete_data' value='Delete Data'/></a></td>";

                    echo"</tr>";
                }
                ?>

        </table>
    <tr>
        <td> <a href="input_data.php"><input type="button" name="add_data" value="Add Data"/></a></td>

    </tr>
</body>
</html>


<?php
include("connection.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Home Page</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
           <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
        <!-- Custom styles for this template -->
        <link href="justified-nav.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            img{
                height: 100px; width: 120px; margin: 10px auto;
            }
        </style>
    </head>
    <body>
        <header class="navbar navbar-pills navbar-fixed-top" id="banner">

            <a class="scrollable" href="#top"></a>
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <nav class="collapse navbar-collapse" id="navbar" role="navigation">
                <ul class="nav nav-justified">
                    <li><a class="scrollable" href="#home">Home</a></li>
                    <li><a class="scrollable" href="#employee">Employee</a></li>
                    <li><a class="scrollable" href="#product">Equipment</a></li>
                    <li><a class="scrollable" href="#about">About</a></li>
                    <li><a class="scrollable" href="#contact">Contact</a></li>
                </ul>
            </nav>

        </header>
        <!-- end header--><a id="top" name="home"></a>
        <main>
            <header>
                <!-- Jumbotron -->
                <div class="jumbotron">
                    <h1>Marketing stuff!</h1>
                    <p class="lead">Ini adalah daftar karyawan yang bekerja pada perusahaan ini beserta data lainnya.</p>
                    <p><a class="btn btn-lg btn-success" href="http://localhost/bootstrap_practice/input_data.php" role="button">Get Started Now!!!</a></p>
                </div>
            </header>
            <!-- Example row of columns -->
            <a id="employee" name="home"></a>
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM employee";
                    $query = mysqli_query($con, $sql);
                    $count = 0;
                    while ($row = mysqli_fetch_array($query)):
                        if ($count % 3 == 0) {
                            $count = 0;
                            ?>
                        </div>
                        <?php
                    }
                    if ($count == 0) {
                        ?>
                        <div class="row">
                            <?php
                        }
                        ?>
                        <div class='col-md-4'>
                            <table class="table" border='1'>
                                <tr>
                                    <td align="center" colspan=2>
                                        <img src='../bootstrap_practice/<?php echo $row['photo1']; ?>' >
                                    </td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td><?php echo $row['NIK']; ?></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><?php echo $row['address']; ?></td>
                                </tr>
                                <tr>
                                    <td>Salary</td>
                                    <td><?php echo $row['salary']; ?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>Option</td>
                                    <td><a href='update_data.php?NIK=<?php echo $row['NIK']; ?>'><input type='button' name='edit_data' value='Edit Data'/></a>
                                        <a href='proses_delete.php?NIK=<?php echo $row['NIK']; ?>' class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php
                        $count++;
                    endwhile;
                    ?>
                    <a href="input_data.php"><input type="button" name="add_data" value="Add Data"/></a>
                </div>
            </div>
            <a id="product" name="home"></a>
            <div class="container">
                <div class="row">
                    <?php
                    $sqli = "SELECT * FROM product";
                    $queri = mysqli_query($con, $sqli);
                    $counti = 0;
                    while ($row = mysqli_fetch_array($queri)):
                        if ($counti % 3 == 0) {
                            $counti = 0;
                            ?>
                        </div>
                        <?php
                    }
                    if ($counti == 0) {
                        ?>
                        <div class="row">
                            <?php
                        }
                        ?>
                        <div class='col-md-4'>
                            <table class="table" border='1'>
                                <tr>
                                    <td align="center" colspan=2>
                                        <img src='../bootstrap_practice/<?php echo $row['photo']; ?>' >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Code</td>
                                    <td><?php echo $row['code']; ?></td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td><?php echo $row['stock']; ?></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><?php echo $row['price']; ?></td>
                                </tr>
                                <tr>
                                    <td>Option</td>
                                    <td><a href='update.php?code=<?php echo $row['code']; ?>'><input type='button' name='edit' value='Edit'/></a>
                                        <a href='proses_hapus.php?code=<?php echo $row['code']; ?>' class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php
                        $counti++;
                    endwhile;
                    ?>
                    <a href="input.php"><input type="button" name="add data" value="Add Data"/></a>
                </div>
            </div>

            <!-- Site footer -->
            <footer class="footer">
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
            <!-- /container -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <script>
                $(document).ready(function () {
                    $(".btn-danger").click(function () {
                        if (confirm("Are you sure?")) {
                            return true;
                        }
                        return false;
                    });
                });
            </script>
        </main>
    </div>
</body>
</html>


<!--<h2>Input Data</h2>
<form method="post" action="simpan_data.php">

<table border size=1 >
NIK : <input type="text" name="NIK" /><br />
name : <input type="text" name="name" /><br />
address : <input type="text" name="stock" /><br />
salary : <input type="text" name="price" /><br />
phone : <input type="text" name="NIK" /><br />
email : <input type="text" name="name" /><br />
<input type="submit" value="tambah"/>
    <form action="simpan_data.php" > 
      <button type="submit">Simpan</button>
    </form> 
</table>
-->    


    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form action="proses_simpan.php" method="post" enctype="multipart/form-data">

        <p>

            <label for="NIK">NIK:</label>

            <input type="text" name="NIK" id="NIK">

        </p>

        <p>

            <label for="name">Name:</label>

            <input type="text" name="name" id="Name">

        </p>

        <p>

            <label for="address">Address:</label>

            <input type="text" name="address" id="address">

        </p>

        <p>

            <label for="salary">Salary:</label>

            <input type="text" name="salary" id="salary">

        </p>
        
        <p>

            <label for="phone">Phone:</label>

            <input type="text" name="phone" id="phone">

        </p>
        
        <p>

            <label for="email">Email Address:</label>

            <input type="text" name="email" id="email">

        </p>
        <p>
        
            <input type="file" name="photo1" id="photo1">
            
        </p>
        <input type="submit" value="Save">

    </form>

    </body>

    </html>


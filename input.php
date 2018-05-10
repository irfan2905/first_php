<!--<h2>Input Barang</h2>
<form method="post" action="simpan.php"/>


kode barang : <input type="text" name="codexxx" /><br />
nama barang : <input type="text" name="name" /><br />
jumlah barang : <input type="text" name="stock" /><br />
harga barang : <input type="text" name="price" /><br />
<input type="submit" value="tambah barang"/>-->

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form action="simpan.php" method="post" enctype="multipart/form-data">

        <p>

            <label for="code">Kode Barang:</label>

            <input type="text" name="code" id="code">

        </p>

        <p>

            <label for="name">Nama Barang:</label>

            <input type="text" name="name" id="Name">

        </p>

        <p>

            <label for="stock">Jumlah Stok:</label>

            <input type="text" name="stock" id="stock">

        </p>

        <p>

            <label for="price">Price:</label>

            <input type="text" name="price" id="price">

        </p>
        <p>
        
            <input type="file" name="photo" id="">
            
        </p>
        <input type="submit" value="Save">

    </form>

    </body>

    </html>


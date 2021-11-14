<html>
<head>
 <title>SIADES | Sistem Informasi Desa</title>
</head>
<body style="font-family:arial">
 <center><h2>SIADES <br /> Sistem Informasi Desa</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="Provinsi.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="varchar" name="id" size="50" required></td>
            </tr>
            <tr> 
                <td>Nama Provinsi</td>
                <td><input type="text" name="nama_provinsi" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $namaprovinsi = $_POST['nama_provinsi'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $provinsi = "INSERT INTO barang VALUES('','$id','$namaprovinsi')";
     $kerjakan=mysqli_query($konek, $provinsi);
     if($kerjakan)
     {
     // Show message when user added
     echo "Data berhasil ditambahkan. <a href='Provinsi.php'>Lihat Data Provinsi</a>";
     }
     else
      {
      echo "Gagal bro";
     }
    }
    ?>
</body>
</html>
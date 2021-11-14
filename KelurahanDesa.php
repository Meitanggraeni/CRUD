<html>
<head>
 <title>SIADES | Sistem Informasi Desa</title>
</head>
<body style="font-family:arial">
 <center><h2>SIADES <br /> Sistem Informasi Desa</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="KelurahanDesa.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="varchar" name="id" size="50" required></td>
            </tr>
            <tr> 
                <td>Nama Kelurahan/Desa</td>
                <td><input type="text" name="nama_KelurahanDesa" size="50" required></td>
            </tr>
            <tr> 
                <td>ID Kecamatan</td>
                <td><input type="text" name="id_kecamatan" size="50" required></td>
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
        $nama_KelurahanDesa = $_POST['nama_KelurahanDesa'];
        $id_Kecamatan = $_POST['id_kecamatan'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_provinsi = "insert into barang values('','$id','$nama_Kecamatan','$id_kota')";
     $kerjakan=mysqli_query($konek, $tambah_KelurahanDesa);
     if($kerjakan)
     {
     // Show message when user added
     echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data Kelurahan/Desa</a>";
     }
     else
      {
      echo "Gagal bro";
     }
    }
    ?>
</body>
</html>
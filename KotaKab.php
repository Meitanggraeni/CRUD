<html>
<head>
 <title>SIADES | Sistem Informasi Desa</title>
</head>
<body style="font-family:arial">
 <center><h2>SIADES <br /> Sistem Informasi Desa</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="KotaKab.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="varchar" name="id" size="50" required></td>
            </tr>
            <tr> 
                <td>Nama Kota/Kab</td>
                <td><input type="text" name="nama_KotaKab" size="50" required></td>
            </tr>
            <tr> 
                <td>Jenis</td>
                <td><input type="text" name="jenis" size="50" required></td>
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
        $nama_KotaKab = $_POST['nama_KotaKab'];
        $jenis = $_POST['jenis'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_provinsi = "insert into barang values('','$id','$nama_KotaKab','$jenis')";
     $kerjakan=mysqli_query($konek, $tambah_KotaKab);
     if($kerjakan)
     {
     // Show message when user added
     echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data KotaKab</a>";
     }
     else
      {
      echo "Gagal bro";
     }
    }
    ?>
</body>
</html>
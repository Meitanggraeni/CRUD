<?php 
 
    include 'koneksi.php';
    $ID   = $_POST['id'];
    $namaprovinsi = $_POST['namaprovinsi'];
     
    $sql = "INSERT INTO provinsi VALUES('', '$id', '$namaprovinsi')";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='Provinsi.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='Provinsi.php';
            </script>
        ";
    }
    //penyimpanan
 
?>
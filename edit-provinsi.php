<?php 
 
    include 'koneksi.php';
    $id     = $_POST['id'];
    $namaprovinsi   = $_POST['namaprovinsi'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE provinsi SET namaprovinsi='$nama' WHERE id='$id'";
     
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='Provinsi.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='edit-provinsi.php?id=$id';
            </script>
        ";
    }
    //penyimpanan
?>
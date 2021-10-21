<?php 

    require 'function.php';

    $id = $_GET["id"];
    // var_dump($_GET);
    $tabelsiswa = query("SELECT * FROM tabel_siswa WHERE id = $id")[0];

    if (isset($_POST["submit"])) {
       if (ubah($_POST) > 0){
           echo "
                <script>
                    alert('data berhasil diubah!!');
                    document.location.href = 'index.php';
                </script>
                ";
       } else {
           echo "
                <script>
                    alert('data gagal diubah!!');
                    document.location.href = 'index.php';
                </script>
            ";
       }
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <title>ubah data</title>
    </head>

    <body>
        <h1>ubah data siswa</h1>
        <form action="" method="post"> 
        <input type="hidden" name="id" value="<?= $tabelsiswa["id"];?>">     
        <input type="hidden" name="tanggal_dibuat" value=" <?= $tabelsiswa["created_date"];?>">
        <input type="hidden" name="tanggal_diperbarui" id="tanggal_diperbarui" value="<?= date('y-m-d');?>">
        <ul>
            <li>
                <label for="nama">name :</label>
                <input type="text" name="nama" id="nama"  value=" <?= $tabelsiswa["nama_siswa"];?>" required>
            </li>
            <li>
                <label for="kode">kode :</label>
                <input type="text" name="kode" id="kode" value=" <?= $tabelsiswa["kode_siswa"];?>">
            </li>
            <li>
                <label for="no telfon">no telfon :</label>
                <input type="text" name="notelfon" id="no telfon" value=" <?= $tabelsiswa["no_telp_siswa"];?>">
            </li>
            <!-- <li>
                <label for="tanggal_dibuat">tanggal dibuat :</label>
                <input type="date" name="tanggal_dibuat" id="tanggal_dibuat" value=" <?= $tabelsiswa["crated_date"];?>">
            </li> -->
            <!-- <li>
                <label for="tanggal_diperbarui">tanggal diperbarui :</label>
                <input type="date" name="tanggal_diperbarui" id="tanggal_diperbarui" value=" <?= $tabelsiswa["updated_date"];?>">
            </li> -->
            <li><button type="submit" name="submit">ubah data!!!</button></li>
        </ul>
        
        </form>


    </body>


</html>
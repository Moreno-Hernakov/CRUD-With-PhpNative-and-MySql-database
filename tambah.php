<?php 

    require 'function.php';

    if (isset($_POST["submit"])) {
       if (tambah($_POST) > 0){
           echo "
                <script>
                    alert('data berhasil ditambahkan!!');
                    document.location.href = 'index.php';
                </script>
                ";
       } else {
           echo "
                <script>
                    alert('data gagal ditambahkan!!');
                    document.location.href = 'index.php';
                </script>
            ";
       }
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <title>tambah data</title>
    </head>

    <body>
        <h1>tambah data siswa</h1>
        <form action="" method="post"> 
        <input type="hidden" name="tanggal_dibuat" id="tanggal_dibuat" value="<?= date('y-m-d');?>">
        <!-- <input type="hidden" name="tanggal_diperbarui" id="tanggal_diperbarui"> -->
        
        <ul>
            <li>
                <label for="nama">name :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="kode">kode :</label>
                <input type="text" name="kode" id="kode">
            </li>
            <li>
                <label for="no telfon">no telfon :</label>
                <input type="text" name="notelfon" id="no telfon">
            </li>
            <!-- <li>
                <label for="tanggal_dibuat">tanggal dibuat :</label>
                <input type="date" name="tanggal_dibuat" id="tanggal_dibuat">
            </li> -->
            <!-- <li>
                <label for="tanggal_diperbarui">tanggal diperbarui :</label>
                <input type="date" name="tanggal_diperbarui" id="tanggal_diperbarui">
            </li> -->
            <li><button type="submit" name="submit">tambah data!!!</button></li>
        </ul>
        
        </form>


    </body>


</html>
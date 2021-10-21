<?php
require 'function.php';

$id = $_GET["id"];
// kurang [0]
// $tabelsiswa = query("SELECT * FROM tabel_siswa WHERE id = $id");
// $tabelsiswa = query("SELECT * FROM tabel_siswa WHERE id = $id")[0];
    if (hapus($id) > 0) {
        echo "
                <script>
                    alert('data berhasil dihapus!!');
                    document.location.href = 'index.php';
                </script>
                ";
    } else {
        echo "
                <script>
                    alert('data gagal dihapus!!');
                    document.location.href = 'index.php';
                </script>
            ";
    }


?>



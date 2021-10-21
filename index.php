<?php 
    require 'function.php';

    $tabelsiswa = query("SELECT * FROM tabel_siswa WHERE is_active=1 ORDER BY id DESC");
    // WHERE is_active=1
?> 

    <!DOCTYPE html>

    <html>
        <head>
            <title>siswa</title>
        </head>
        <body>
        <h1>TABEL DATA SISWA</h1>
        <a href="tambah.php">tambah data</a>
        <br><br>
                <table border="1" cellspacing='0' cellpadding="10">
                    <tr>
                        <th>id</th>
                        <th>update</th>
                        <th>name</th>
                        <th>code</th>
                        <th>number</th>
                        <th>created date</th>
                        <th>updated date</th>
                        <th>is active</th>
                    </tr>
                    <?php $i=1; ?>
                    <?php foreach( $tabelsiswa as $ts ) : ?>
                    <tr>
                        <td><?= $i?></td>
                        <td>
                            <a href="ubah.php?id=<?= $ts['id']; ?>">upate</a> 
                            <a href="hapus.php?id=<?= $ts['id']; ?>" onclick="return confirm('hapus data dari tabel?');">delete</a>
                        </td>
                        <td><?= $ts["nama_siswa"]; ?></td>
                        <td><?= $ts["kode_siswa"]; ?></td>
                        <td><?= $ts["no_telp_siswa"]; ?></td>
                        <td><?= $ts["created_date"]; ?></td>
                        <td><?= $ts["updated_date"]; ?></td>
                        <td><?= $ts["is_active"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
        </body>
    </html>







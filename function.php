<?php
$conn = mysqli_connect("localhost", "root", "", "spp_sekolah");
// if (!$conn) {
//     die('could not connect: '. mysqli_error());
// } else {
// echo 'Connected successfully';
// }
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $kode = $data["kode"];
    $notelfon = $data["notelfon"];
    $tanggal_dibuat = $data["tanggal_dibuat"];
    $tanggal_diperbarui = $data["tanggal_diperbarui"];

    $query = "UPDATE tabel_siswa SET
                   nama_siswa= '$nama',
                   kode_siswa =  '$kode',
                   no_telp_siswa = '$notelfon',
                   created_date = '$tanggal_dibuat',
                   updated_date = '$tanggal_diperbarui'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




function tambah($data)
{
    global $conn;
    $nama = $data["nama"];
    // var_dump($data);
    $kode = $data["kode"];
    $notelfon = $data["notelfon"];
    $tanggal_dibuat = $data["tanggal_dibuat"];
    // $tanggal_diperbarui = $data["tanggal_diperbarui"];

    $query = "INSERT INTO tabel_siswa
                        VALUES
                    ('','$nama', '$kode', '$notelfon', '$tanggal_dibuat', '', true)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function hapus($id)
{
    global $conn;
    // $id = $data["id"];
    // $aktif = $data["talpus"];
    $query = " UPDATE tabel_siswa SET 
                     is_active = false
                WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

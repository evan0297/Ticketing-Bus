<?php

//panggil koneksi database
include "connection.php";

//simpan data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($connection, "INSERT INTO tbl_pemesan (nama, nik, no_hp, kls_penumpang, jadwal_brkt, jml_pnm, jml_pnm_lsi, harga, total) 
                                     VALUES ('$_POST[tnama]',
                                            '$_POST[tnik]',
                                            '$_POST[tnohp]',
                                            '$_POST[tkelas]',
                                            '$_POST[tjadwal]',
                                            '$_POST[tpenumpang]',
                                            '$_POST[tpenumpanglansia]',
                                            '$_POST[tharga]',
                                            '$_POST[ttotal]')");

//jika simpan sukses
if ($simpan) {
    echo "<script>
        alert('Simpan data sukses !');
        document.location='tampildata.php';
        </script>";

} else {
    echo "<script>
        alert('Simpan data gagal !');
        document.location='tampildata.php';
        </script>";
}
}

//Edit Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($connection, " UPDATE tbl_pemesan SET 
                                            nama = '$_POST[tnama]',
                                            nik = '$_POST[tnik]',
                                            no_hp = '$_POST[tnohp]',
                                            kls_penumpang = '$_POST[tkelas]',
                                            jadwal_brkt = '$_POST[tjadwal]',
                                            jml_pnm = '$_POST[tpenumpang]',
                                            jml_pnm_lsi = '$_POST[tpenumpanglansia]',
                                            harga = '$_POST[tharga]',
                                            total = '$_POST[ttotal]'
                                        WHERE id_pemesan = '$_POST[id_pemesan]'");

//jika simpan sukses
if ($ubah) {
    echo "<script>
        alert('Ubah data sukses !');
        document.location='tampildata.php';
        </script>";
} else {
    echo "<script>
        alert('Ubah data gagal !');
        document.location='tampildata.php';
        </script>";
}
}

//Hapus Data
if (isset($_POST['ahapus'])) {

    $hapus = mysqli_query($connection, "DELETE FROM tbl_pemesan WHERE id_pemesan = '$_POST[id_pemesan]' ");

//jika hapus sukses
if ($hapus) {
    echo "<script>
        alert('hapus data sukses !');
        document.location='tampildata.php';
        </script>";
} else {
    echo "<script>
        alert('hapus data gagal !');
        document.location='tampildata.php';
        </script>";
}
}
?>

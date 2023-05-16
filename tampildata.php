<?php

//panggil koneksi database
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="stylesidebar.css" />
  
    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-6.2.0-web/css/all.css" />

    <title>Document</title>
  </head>

    <div class="container">
        <div class="sidebar">
            <div class="header">
              <div class="list-item">
                <a href="#">
                  <img src="img" alt="" class="icon" />
                  <span class="description-header">GoBus!</span>
                </a>
                <div class="illustration">
                  <img class="gambar" src="img/bus-driver.png" alt="" />
                </div>
              </div>
            </div>
            <div class="main">
              <div class="list-item">
                <a href="index.php">
                  <i class="fa-solid fa-bus" style="color: #ffffff"></i>
                  <span class="description"> Kelas Armada</span>
                </a>
              </div>
              <div class="list-item">
                <a href="daftarharga.php">
                    <i class="fa-solid fa-tags" style="color: #ffffff"></i>
                    <span class="description">Daftar Harga</span>
                </a>
              </div>
              <div class="list-item">
                <a href="pemesanan.php">
                    <i class="fa-solid fa-clipboard fa-lg" style="color: #ffffff"></i>
                    <span class="description">Pesan Tiket</span>
                </a>
              </div>
              <div class="list-item">
                <a href="tampildata.php">
                    <i class="fa-solid fa-clipboard fa-lg" style="color: #ffffff"></i>
                    <span class="description">TampilData</span>
                </a>
              </div>
              </div>
        </div>
        <div class="utama">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>      
            </div>
            <div class="labelmenu">
                <h2> Tampil Data</h2>
            </div>
            <div class="header">
            
            <hr />
            </div>

        <div class="container1">
        <div class="card">
        <div class="card-header">
            Data Penumpang
        </div>
        <div class="card-body">
            
            <table class="table table-bordered table-striped table-hover align-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No HP</th>
                    <th>Kelas Penumpang</th>
                    <th>Jadwal Penumpang</th>
                    <th>Jumlah Penumpang</th>
                    <th>Jumlah Penumpang Lansia</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                    
                </tr>
            
                <?php
                $no = 1;
                $tampil = mysqli_query($connection, "SELECT * FROM tbl_pemesan ORDER BY id_pemesan DESC");
                while ($data = mysqli_fetch_array($tampil)):

                ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama']?></td>
                        <td ><?= $data['nik']?></td>
                        <td ><?= $data['no_hp']?></td>
                        <td ><?= $data['kls_penumpang']?></td>
                        <td><?= $data['jadwal_brkt']?></td>
                        <td><?= $data['jml_pnm']?></td>
                        <td><?= $data['jml_pnm_lsi']?></td>
                        <td><?= $data['harga']?></td>
                        <td><?= $data['total']?></td>                       
                        <td style="width: 7%">
                        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>"><i class="fa-solid fa-pen-to-square fa-ms"></i></a>
                        
                        </td>
                    </tr>

                    
                    <!-- Awal Modal Ubah -->
                    <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="crud.php" method="POST">
                                <input type="hidden" name="id_pemesan" value="<?= $data['id_pemesan'] ?>">
                            <div class="row mb-3" >
                                <label class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                <input type="text" name="tnama" class="form-control" value="<?= $data['nama'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">NIK</label>
                                <div class="col-sm-8">
                                <input type="number" name="tnik" class="form-control" value="<?= $data['nik'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">No HP</label>
                                <div class="col-sm-8">
                                <input type="number" name="tnohp" class="form-control" value="<?= $data['no_hp'] ?>">
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label">Kelas Penumpang</label>
                                <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="tkelas" >
                                    <option value="<?= $data['kls_penumpang'] ?>"><?= $data['kls_penumpang'] ?>"</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Eksekutif">Eksekutif</option>
                                    <option value="First Class<">First Class</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Jadwal Berangkat</label>
                                <div class="col-sm-8">
                                <input type="date" name="tjadwal" class="form-control" value="<?= $data['jadwal_brkt'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Jumlah Penumpang</label>
                                <div class="col-sm-8">
                                <input type="number" name="tpenumpang" class="form-control" value="<?= $data['jml_pnm'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Jumlah Penumpang Lansia</label>
                                <div class="col-sm-8">
                                <input type="number" name="tpenumpanglansia" class="form-control" value="<?= $data['jml_pnm_lsi'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                <input type="text" name="tharga" class="form-control" value="<?= $data['harga'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Total</label>
                                <div class="col-sm-8">
                                <input type="text" name="ttotal" class="form-control" value="<?= $data['total'] ?>">
                                </div>
                            </div>
                    
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modalUbah" name="bubah">Ubah</button>
                            <button type="button" class="btn btn-danger ms-3" data-bs-dismiss="modal"> Batal</button>
                        </div>
                            
                            </div>
                            </div>
                        
                        </form>
                    </div>
                    
                    </div>
                </div>
                </div>                     
                </div>
                    <?php endwhile; ?>
        </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

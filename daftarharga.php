<?php

//panggil koneksi database
//include "koneksi.php";

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
                <a href="">
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
                <a href="#">
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
                <h2> Daftar Harga</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-2">
            <div class="col">
                <div class="card">
                <img src="img/afirst.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center">First Class</h3>
                    <h5 class="card-text" style="text-align:center"> Harga : (Rp. 1.000.000,-) </h5>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/afirst.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center">Eksekutif</h3>
                    <h5 class="card-text" style="text-align:center"> Harga : (Rp. 700.000,-) </h5>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/afirst.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center">Bisnis</h3>
                    <h5 class="card-text" style="text-align:center"> Harga : (Rp.  400.000,-) </h5>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/afirst.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="text-align:center">Promo Happy!</h3>
                    <h6 class="card-text" style="text-align:center"> Terkhusus penumpang lansia akan mendapatkan diskon 10% </h6>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

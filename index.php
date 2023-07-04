<?php
  $hook = true;
  require "config.php";
  require "condition.php";
?>
<!DOCTYPE html>
<html lang="id-ID">
  <head>
    <meta charset="UTF-8">
    <meta name="application-name" content="Aplikasi kasir Aini Juice">
    <meta name="description" content="Aplikasi kasir Kedai Juice mempermudah dalam mengelola pemesanan atau pembelian pelanggan beserta transaksinya. Kemudian juga dapat mengelola daftar menu, harga, dll.">
    <meta name="keywords" content="kasir, juice, sakti, daftar menu, makanan, minuman, kasir Aini Juice, daftar menu Aini Juice, makanan Kedai Aini, minuman Juice, Coffe, Kedai Aini Juice">
    <meta name="author" content="Aurora Nabila dan Selvi selvania">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Kedai Aini Juice</title>
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <img src="assets/images/up2.png" class="scrollup" title="Keatas">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile my-3">
              <img src="assets/images/juice.png" class="navbar-brand navbar-brand-wrapper brand-log ml-4" alt="logo" title="logo">
            </li>
            <li class="nav-item nav-profile mt-0 mb-2">
              <a href="?p=profil" class="nav-link" title="Profil">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src='assets/images/user/<?=$rowp["gambar"];?>' alt="profil">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?=$rowp["nama_lengkap"];?></p>
                  <p class="designation"><?=$admin ? "Administrator":"Kasir";?></p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=dashboard">
              <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z"/>
</svg> </center> 
<span class="menu-title">Algoritma Penjualan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=kasir">
              <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z"/>
</svg> </center>
                <span class="menu-title">Kasir</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=daftar-menu">
              <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z"/>
</svg> </center>
                <span class="menu-title">Daftar Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=laporan">
              <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z"/>
</svg> </center>  
              <span class="menu-title">Laporan</span>
              </a>
            </li>
            <?php if( $admin ){ ?>
            <li class="nav-item">
              <a class="nav-link" href="?p=pengguna">
              <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z"/>
</svg> </center>
                <span class="menu-title">Pengguna</span>
              </a>
            </li>
            <?php } ?>
            <li class="nav-item">
            <center> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
</svg> </center>
              <a type="button" class="nav-link" data-toggle="modal" data-target="#logout"><span class="menu-title">Keluar</span></a>
            </li>
          </ul>
        </nav>
        <div class="modal fade" id="logout" role="dialog"> 
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post">
                <div class="modal-header">
                  <h4 class="modal-title">Keluar dari Aplikasi</h4>
                  <button type="button" class="close mt-n3 mr-n3" data-dismiss="modal" title="Tutup">&times;</button>
                </div>
                <div class="modal-body">
                  <p><b>Apakah Anda ingin keluar? Atau mungkin hanya gabut terus kepencet?</b></p>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="logout" class="btn btn-dark mr-2" title="Keluar">Keluar nih?</button>
                  <button type="button" class="btn btn-light" data-dismiss="modal" title="Batal">Batal saja deh</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              if( isset($_GET['p']) ){
                $page = $_GET['p'];
                switch( $page ){
                  case "dashboard": include "dashboard.php"; break;
                  case "kasir": include "kasir.php"; break;
                  case "daftar-menu": include "daftarmenu.php"; break;
                  case "laporan": include "laporan.php"; break;
                  case "detail": include "detailpesanan.php"; break;
                  case "pengguna": include "pengguna.php"; break;
                  case "profil": include "profil.php"; break;
                  default: include "dashboard.php"; break;
                }
              } else {
                include 'dashboard.php';
              }
            ?>
          </div>
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright &copy; 2023 Kedai Aini Juice. All Rights Reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="#">Tugas Pemrograman Web</a> - Oleh Aurora dan Selvi</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>

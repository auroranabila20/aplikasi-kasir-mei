<?=isset($hook) ? "":"<script>window.location.href='index'</script>";?>
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <center> <h3 class="page-title">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
  <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
</svg> Algoritma Penjualan 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
  <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
</svg>
      </h3> </center>
    </div>
  </div>
  <div class="col-12">
    <div class="page-header-toolbar d-flex">
      <div class="filter-wrapper">
        <?=$admin ? '<button type="button" class="btn btn-dark btn-lg btn-fw" data-toggle="modal" data-target="#modalin" title="Tambah Modal">Tambah Modal</button>':"";?>
        <div class="modal fade" id="modalin" role="dialog"> 
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post">
                <div class="modal-header">
                 <center> <h4 class="modal-title">Tambah Modal</h4> </center>
                  <button type="button" class="close mt-n3 mr-n3" data-dismiss="modal" title="Tutup">&times;</button>
                </div>
                <div class="modal-body">
                  <?php
                    $kotornow = 0;
                    $tbpesanannow = mysqli_query($conn, "SELECT * FROM pesanan WHERE tanggal='$datenow'");
                    foreach( $tbpesanannow as $rowpesanannow ){
                      $kotornow += $rowpesanannow["total"];
                    }
                  ?>
                  <div class="form-group">
                    <label for="modalnow">Modal (Rp)</label>
                    <input type="number" name="modal" id="modalnow" class="form-control" required oninvalid="this.setCustomValidity('Mohon Isi Terlebih Dahulu 🙂')" oninput="this.setCustomValidity('')" title="Masukkan Jumlah Modal">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?=$datenow;?>" required title="Pilih Tanggal">
                  </div>
                  <div class="form-group">
                    <h6>Penghasilan Kotor : Rp <?=number_format($kotornow);?></h6>
                  </div>
                  <div class="form-group">
                    <input type="hidden" value="<?=$kotornow;?>" name="kotor">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="tambahmodal" class="btn btn-dark mr-2" title="Simpan">Simpan</button>
                  <button type="button" class="btn btn-light" data-dismiss="modal" title="Batal">Batal</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="d-flex">
              <div class="wrapper">
                <?php
                  $tbpesanan = mysqli_query($conn, "SELECT * FROM pesanan");
                  $totalpesanan = mysqli_num_rows($tbpesanan);
                ?>
                <h3 class="mb-0 font-weight-semibold" title="<?php foreach ($tbpesanan as $rowpesanan){ echo $rowpesanan['nama_transaksi'].', '; } ?>"><?=$totalpesanan;?></h3>
                <h5 class="mb-0 font-weight-medium text-primary" title="<?php foreach ($tbpesanan as $rowpesanan){ echo $rowpesanan['nama_transaksi'].', '; } ?>">Transaksi</h5>
                <p class="mb-0 text-muted"></p>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-4 col-sm-6 mt-sm-0 mt-4">
            <div class="d-flex">
              <div class="wrapper">
                <?php
                  $tbpengguna = mysqli_query($conn, "SELECT * FROM pengguna");
                  $totalpengguna = mysqli_num_rows($tbpengguna);
                ?>
                <h3 class="mb-0 font-weight-semibold" title="<?php foreach ($tbpengguna as $rowpengguna){ echo $rowpengguna['nama_lengkap'].', '; } ?>"><?=$totalpengguna;?></h3>
                <h5 class="mb-0 font-weight-medium text-primary" title="<?php foreach ($tbpengguna as $rowpengguna){ echo $rowpengguna['nama_lengkap'].', '; } ?>">Pengguna</h5>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-4 col-sm-6 mt-md-0 mt-4">
            <div class="d-flex">
              <div class="wrapper">
                <?php
                  $tbmenu = mysqli_query($conn, "SELECT * FROM daftar_menu");
                  $totalmenu = mysqli_num_rows($tbmenu);
                ?>
                <h3 class="mb-0 font-weight-semibold" title="<?php foreach ($tbmenu as $rowmenu){ echo $rowmenu['menu'].', '; } ?>"><?=$totalmenu;?></h3>
                <h5 class="mb-0 font-weight-medium text-primary" title="<?php foreach ($tbmenu as $rowmenu){ echo $rowmenu['menu'].', '; } ?>">Daftar Menu</h5>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-4 col-sm-6 mt-xl-0 mt-md-4 mt-4">
            <div class="d-flex">
              <div class="wrapper">
                <?php
                  $tbdetail = mysqli_query($conn, "SELECT * FROM detail_pesanan");
                  $totalporsi = 0;
                  foreach( $tbdetail as $rowdetail ){
                    $totalporsi+=$rowdetail['qty'];
                  }
                ?>
                <h3 class="mb-0 font-weight-semibold" title="Menu Terjual <?=$totalporsi;?> Porsi"><?=$totalporsi;?></h3>
                <h5 class="mb-0 font-weight-medium text-primary" title="Menu Terjual <?=$totalporsi;?> Porsi">Menu Terjual</h5>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title icon-sm">Statistik Penghasilan Perminggunya, Semoga Beruntung ya!</h2>
            <hr>
            <div class="d-flex flex-column flex-lg-row">
              <div class="data-wrapper d-flex mt-2 mt-lg-0">
                <div class="wrapper pr-3">
                  <h5 class="mb-0" title="Penghasilan Bersih">Bersih</h5>
                  <div class="d-flex align-items-center">
                    <h5 class="font-weight-lighter mb-0"><?=$numkeuangan>0 ? "Rp ".number_format($rowkeuangan["penghasilan_bersih"]):"Rp 0";?></h5>
                    <div id="bersih1" nilaiAngka="<?=$num1==1 ? $row1['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih2" nilaiAngka="<?=$num2==1 ? $row2['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih3" nilaiAngka="<?=$num3==1 ? $row3['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih4" nilaiAngka="<?=$num4==1 ? $row4['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih5" nilaiAngka="<?=$num5==1 ? $row5['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih6" nilaiAngka="<?=$num6==1 ? $row6['penghasilan_bersih']:0;?>"></div>
                    <div id="bersih7" nilaiAngka="<?=$num7==1 ? $row7['penghasilan_bersih']:0;?>"></div>
                  </div>
                </div>
                <div class="wrapper pr-3">
                  <h5 class="mb-0" title="Modal">Modal</h5>
                  <div class="d-flex align-items-center">
                    <h5 class="font-weight-lighter mb-0"><?=$numkeuangan>0 ? "Rp ".number_format($rowkeuangan["modal"]):"Rp 0";?></h5>
                    <div id="modal1" nilaiAngka="<?=$num1==1 ? $row1['modal']:0;?>"></div>
                    <div id="modal2" nilaiAngka="<?=$num2==1 ? $row2['modal']:0;?>"></div>
                    <div id="modal3" nilaiAngka="<?=$num3==1 ? $row3['modal']:0;?>"></div>
                    <div id="modal4" nilaiAngka="<?=$num4==1 ? $row4['modal']:0;?>"></div>
                    <div id="modal5" nilaiAngka="<?=$num5==1 ? $row5['modal']:0;?>"></div>
                    <div id="modal6" nilaiAngka="<?=$num6==1 ? $row6['modal']:0;?>"></div>
                    <div id="modal7" nilaiAngka="<?=$num7==1 ? $row7['modal']:0;?>"></div>
                  </div>
                </div>
                <div class="wrapper">
                  <h5 class="mb-0" title="Penghasilan Kotor">Kotor</h5>
                  <div class="d-flex align-items-center">
                    <h5 class="font-weight-lighter mb-0"><?=$numkeuangan>0 ? "Rp ".number_format($rowkeuangan["penghasilan_kotor"]):"Rp 0";?></h5>
                    <div id="kotor1" nilaiAngka="<?=$num1==1 ? $row1['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor2" nilaiAngka="<?=$num2==1 ? $row2['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor3" nilaiAngka="<?=$num3==1 ? $row3['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor4" nilaiAngka="<?=$num4==1 ? $row4['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor5" nilaiAngka="<?=$num5==1 ? $row5['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor6" nilaiAngka="<?=$num6==1 ? $row6['penghasilan_kotor']:0;?>"></div>
                    <div id="kotor7" nilaiAngka="<?=$num7==1 ? $row7['penghasilan_kotor']:0;?>"></div>
                  </div>
                </div>
              </div>
              <div id="sales-statistics-legend" class="ml-lg-auto"></div>
            </div>
            <canvas height="120" id="sales-statistics-overview" class="mt-5"></canvas>
          </div>
        </div>
      </div>
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h2 class="card-title icon-sm">Riwayat Pesanan</h2>
              <a href="index.php?p=laporan" class="font-sm mt-1 mr-2" title="Lihat Lainnya">Lainnya</a>
            </div>
            <hr>
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr class="font-weight-bold">
                    <th class="font-weight-bold">ID Transaksi</th>
                    <th class="font-weight-bold">Nama Transaksi</th>
                    <th class="font-weight-bold">Total</th>
                    <th class="font-weight-bold">Tanggal</th>
                    <th class="font-weight-bold">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    $tbriwayat = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 8");

                    foreach( $tbriwayat as $rowriwayat ):

                    if( mysqli_num_rows($tbriwayat)>0 ):
                    $s = strtotime($rowriwayat["tanggal"]);
                    $d = date("d", $s);
                    $m = $bulan3[date("M", $s)];
                    $y = date("Y", $s);
                    $dmy = $d." ".$m." ".$y;
                  ?>
                  <tr>
                      <td><?=$rowriwayat["id_transaksi"];?></td>
                      <td><?=$rowriwayat["nama_transaksi"];?></a></td>
                      <td>Rp <?=number_format($rowriwayat["total"]);?></td>
                      <td><?=$dmy;?></td>
                      <td><a href="?p=detail&id=<?=$rowriwayat['id_pesanan'];?>" class="btn btn-primary h-100 w-75 p-1 btn-icons" title="Detail"><i class="fa fa-info"></i></a></td>
                  </tr>
                  <?php
                    $i++;
                    endif;
                    endforeach;
                  ?>
                </tbody>
              </table>
              <?=mysqli_num_rows($tbriwayat)==0 ? '<h5 class="text-center text-muted my-5 py-5">Belum ada riwayat pesanan</h5>':"";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-12 col-sm-6 grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <div class="wrapper">
              <h2 class="card-title icon-sm">Menu Yang Sudah Terjual</h2>
              <hr>
              <div class="mb-4" id="net-profit-legend"></div>
            </div>
            <div id="seninmi" nilaiAngka="<?php
              $querymi1 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h1'");
              $porsimi1 = 0;
              while( $rowmi1 = mysqli_fetch_assoc($querymi1) ){
                $porsimi1+=$rowmi1['qty'];
              }
              echo mysqli_num_rows($querymi1)>0 ? $porsimi1:0;
            ?>"></div>
            <div id="selasami" nilaiAngka="<?php
              $querymi2 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h2'");
              $porsimi2 = 0;
              while( $rowmi2 = mysqli_fetch_assoc($querymi2) ){
                $porsimi2+=$rowmi2['qty'];
              }
              echo mysqli_num_rows($querymi2)>0 ? $porsimi2:0;
            ?>"></div>
            <div id="rabumi" nilaiAngka="<?php
              $querymi3 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h3'");
              $porsimi3 = 0;
              while( $rowmi3 = mysqli_fetch_assoc($querymi3) ){
                $porsimi3+=$rowmi3['qty'];
              }
              echo mysqli_num_rows($querymi3)>0 ? $porsimi3:0;
            ?>"></div>
            <div id="kamismi" nilaiAngka="<?php
              $querymi4 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h4'");
              $porsimi4 = 0;
              while( $rowmi4 = mysqli_fetch_assoc($querymi4 )){
                $porsimi4+=$rowmi4['qty'];
              }
              echo mysqli_num_rows($querymi4)>0 ? $porsimi4:0;
            ?>"></div>
            <div id="jumitmi" nilaiAngka="<?php
              $querymi5 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h5'");
              $porsimi5 = 0;
              while( $rowmi5 = mysqli_fetch_assoc($querymi5) ){
                $porsimi5+=$rowmi5['qty'];
              }
              echo mysqli_num_rows($querymi5)>0 ? $porsimi5:0;
            ?>"></div>
            <div id="sabtumi" nilaiAngka="<?php
              $querymi6 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h6'");
              $porsimi6 = 0;
              while( $rowmi6 = mysqli_fetch_assoc($querymi6) ){
                $porsimi6+=$rowmi6['qty'];
              }
              echo mysqli_num_rows($querymi6)>0 ? $porsimi6:0;
            ?>"></div>
            <div id="minggumi" nilaiAngka="<?php
              $querymi7 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='minuman' AND pesanan.tanggal='$h7'");
              $porsimi7 = 0;
              while( $rowmi7 = mysqli_fetch_assoc($querymi7) ){
                $porsimi7+=$rowmi7['qty'];
              }
              echo mysqli_num_rows($querymi7)>0 ? $porsimi7:0;
            ?>"></div>
            <div id="seninma" nilaiAngka="<?php
              $queryma1 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h1'");
              $porsima1 = 0;
              while( $rowma1 = mysqli_fetch_assoc($queryma1) ){
                $porsima1+=$rowma1['qty'];
              }
              echo mysqli_num_rows($queryma1)>0 ? $porsima1:0;
            ?>"></div>
            <div id="selasama" nilaiAngka="<?php
              $queryma2 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h2'");
              $porsima2 = 0;
              while( $rowma2 = mysqli_fetch_assoc($queryma2) ){
                $porsima2+=$rowma2['qty'];
              }
              echo mysqli_num_rows($queryma2)>0 ? $porsima2:0;
            ?>"></div>
            <div id="rabuma" nilaiAngka="<?php
              $queryma3 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h3'");
              $porsima3 = 0;
              while( $rowma3 = mysqli_fetch_assoc($queryma3) ){
                $porsima3+=$rowma3['qty'];
              }
              echo mysqli_num_rows($queryma3)>0 ? $porsima3:0;
            ?>"></div>
            <div id="kamisma" nilaiAngka="<?php
              $queryma4 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h4'");
              $porsima4 = 0;
              while( $rowma4 = mysqli_fetch_assoc($queryma4) ){
                $porsima4+=$rowma4['qty'];
              }
              echo mysqli_num_rows($queryma4)>0 ? $porsima4:0;
            ?>"></div>
            <div id="jumatma" nilaiAngka="<?php
              $queryma5 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h5'");
              $porsima5 = 0;
              while( $rowma5 = mysqli_fetch_assoc($queryma5) ){
                $porsima5+=$rowma5['qty'];
              }
              echo mysqli_num_rows($queryma5)>0 ? $porsima5:0;
            ?>"></div>
            <div id="sabtuma" nilaiAngka="<?php
              $queryma6 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h6'");
              $porsima6 = 0;
              while( $rowma6 = mysqli_fetch_assoc($queryma6) ){
                $porsima6+=$rowma6['qty'];
              }
              echo mysqli_num_rows($queryma6)>0 ? $porsima6:0;
            ?>"></div>
            <div id="mingguma" nilaiAngka="<?php
              $queryma7 = mysqli_query($conn, "SELECT * FROM daftar_menu INNER JOIN detail_pesanan ON daftar_menu.id_menu=detail_pesanan.id_menu INNER JOIN pesanan ON detail_pesanan.id_pesanan=pesanan.id_pesanan WHERE daftar_menu.jenis='makanan' AND pesanan.tanggal='$h7'");
              $porsima7 = 0;
              while( $rowma7 = mysqli_fetch_assoc($queryma7) ){
                $porsima7+=$rowma7['qty'];
              }
              echo mysqli_num_rows($queryma7)>0 ? $porsima7:0;
            ?>"></div>
            <canvas height="250px" id="net-profit" class="my-auto mx-auto"></canvas>
            <div class="d-flex mt-5 py-3 border-top">
              <p class="mb-0">Minuman</p>
              <p class="mb-0 ml-auto text-primary"><?php
                echo $allmi = $porsimi1+$porsimi2+$porsimi3+$porsimi4+$porsimi5+$porsimi6+$porsimi7;
              ?></p>
            </div>
            <div class="d-flex pt-3 border-top">
              <p class="mb-0">Makanan</p>
              <p class="mb-0 ml-auto text-primary"><?php
                echo $allma = $porsima1+$porsima2+$porsima3+$porsima4+$porsima5+$porsima6+$porsima7;
              ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-6">
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title icon-sm">Makanan Favorit Para Pelanggan Hebat</h2>
                <hr>
                <?php
                  $porsimakanan = 0;

                  $tbmakanan = mysqli_query($conn, "SELECT * FROM daftar_menu WHERE jenis='Makanan' ORDER BY terjual DESC");
                  $rowmakanan = mysqli_fetch_assoc($tbmakanan);

                  if( $rowmakanan["terjual"]>0 ):
                ?>
                <div class="row">
                  <div class="col-xl-4 col-sm-5 col-4">
                    <img src="assets/images/daftarmenu/<?=$rowmakanan["gambar"];?>" alt="<?=$rowmakanan['menu'];?>" class="w-100 mb-2" title="Gambar <?=$rowmakanan['menu'];?>">
                  </div>
                  <div class="col-md-7 col-sm-6 col-6">
                    <h6><?=$rowmakanan["menu"];?></h6>
                    <h6>Rp <?=number_format($rowmakanan["harga"]);?></h6>
                    <h6><strong class="text-danger"><?=$rowmakanan["terjual"];?> Porsi</strong></h6>
                    <?php
                      else:
                        echo '<h5 class="text-center text-muted my-5">Makanan belum terjual</h5>';
                      endif;
                    ?>
                  </div>
                  <div class="col-12">
                    <?=$rowmakanan["terjual"]>0 ? '<a href="?p=daftar-menu&j=makanan" class="font-sm" title="Lihat Lainnya">Makanan Lainnya</a>':"";?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title icon-sm">Minuman Favorit Para Hauserr</h2>
                <hr>
                <?php
                  $porsiminuman = 0;
                  $tbminuman = mysqli_query($conn, "SELECT * FROM daftar_menu WHERE jenis='Minuman' ORDER BY terjual DESC");
                  $rowminuman = mysqli_fetch_assoc($tbminuman);
                  if( $rowminuman["terjual"]>0 ):
                ?>
                <div class="row">
                  <div class="col-xl-4 col-sm-5 col-4">
                    <img src="assets/images/daftarmenu/<?=$rowminuman["gambar"];?>" alt="<?=$rowminuman['menu'];?>" class="w-100 mb-2" title="Gambar <?=$rowminuman['menu'];?>">
                  </div>
                  <div class="col-md-7 col-sm-6 col-6">
                    <h6><?=$rowminuman["menu"];?></h6>
                    <h6>Rp <?=number_format($rowminuman["harga"]);?></h6>
                    <h6><strong class="text-danger"><?=$rowminuman["terjual"];?> Porsi</strong></h6>
                    <?php
                      else:
                        echo '<h5 class="text-center text-muted my-5">Minuman belum terjual</h5>';
                      endif;
                    ?>
                  </div>
                  <div class="col-12">
                    <?=$rowminuman["terjual"]>0 ? '<a href="?p=daftar-menu&j=minuman" class="font-sm" title="Lihat Lainnya">Minuman Lainnya</a>':"";?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

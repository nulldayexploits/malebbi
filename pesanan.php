<?php include "template/top.php"; ?>


 <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">Daftar Pesanan</h3>

<style type="text/css">
  
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }

</style>



<?php 

  include 'admin/config/connect-db.php';


?>
    <center>
      <table class='w3-table-all' style='width:90%'>
      <tr class='w3-orange'>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      <?php
        $no=1;
        $hrg=0; 
        for ($i=0; $i < count($_SESSION['pesanan']); $i++) { 
          $dat = explode('||', $_SESSION['pesanan'][$i]);
          $hrg=$hrg+$dat[1];
          echo "<tr>
                  <td>".$no."</td>
                  <td>".$dat[0]."</td>
                  <td>Rp. ".number_format($dat[1])."</td>
                  <td><a href='pesanan-unset.php?key=".$i."' class='button' onclick='return confirm(`Apakah Anda Yakin Akan Menghapus Ini?`);'>Hapus</a></td>
                </tr>";
          $no++;  
        }
      ?>

    </table>
    <b>Total Rp. <?php echo number_format($hrg); ?></b>

    <br><br>
    <a href="pesanan-fix.php" class="button" onclick='return confirm(`Apakah Anda Yakin Memesan Pesanan Ini?`);'>Pesan</a>
    <a href="pesanan-unset-all.php" class="button" onclick='return confirm(`Apakah Anda Yakin Menghapus Semua Pesanan Ini?`);'>Hapus Semua</a>




                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>



<?php include "template/bottom.php"; ?>
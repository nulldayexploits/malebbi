<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:15px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Kelola Transaksi</b></h1>
    <hr class="w3-round garis-judul-content">
      <br>

      <table border=1 width="100%" style="border-collapse: collapse;">
        <tr class="w3-red">
          <th>No</th>
          <th>Pesanan</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Total Bayar</th>
        </tr>
        

        <?php
          $no = 1;
          $result = mysqli_query($mysqli, "SELECT * FROM table_transaksi a 
                                           LEFT JOIN table_menu b ON a.id_menu = b.id
                                           ORDER BY a.tgl_pesan");
          while($data = mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td><center><?php echo $no; ?></td>
          <td><center><?php echo $data['nama_menu']; ?></td>
          <td><center><?php echo TanggalIndo($data['tgl_pesan']); ?></td>
          <td><center><?php echo $data['waktu']; ?></td>
          <td><center>Rp. <?php echo number_format($data['total_bayar']); ?></td>
        </tr>
        <?php $no++; } ?>


      </table>

  </div>


  
  
<!-- End page content -->
</div>


<br><br><br><br><br>


<?php 
   

function TanggalIndo($date){
  $BulanIndo = array( 
                    "Jan", 
                    "Feb", 
                    "Mar", 
                    "Apr", 
                    "Mei", 
                    "Jun", 
                    "Jul", 
                    "Agu", 
                    "Sep", 
                    "Okt", 
                    "Nov", 
                    "Des"
                    );

  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);

  $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;   
  return($result);
}

  include('template/bawah.php'); 


?>


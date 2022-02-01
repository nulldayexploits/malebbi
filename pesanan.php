<?php include "template/top.php"; ?>

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

<h2 style="color:black;margin-top: 70px;margin-left: 70px;">Daftar Pesanan</h2>



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


<script type="text/javascript">
  
</script>

</body>
</html>
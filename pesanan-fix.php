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

<h2 style="color:black;margin-top: 70px;margin-left: 70px;">Pesanan Berhasil Dipesan!</h2>

<center>

<?php 
    
    include('admin/config/connect-db.php'); 
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
        

   
    for ($i=0; $i < count($_SESSION['pesanan']); $i++) { 
         
          $dat = explode('||', $_SESSION['pesanan'][$i]);

          $id = cek_id($dat[0], $mysqli);
          $tgl = date('Y-m-d');
          $wkt = date('H:i:s');

          $result = mysqli_query($mysqli, "INSERT INTO table_transaksi (id, id_menu, total_bayar, tgl_pesan, waktu) 
            VALUES(null, $id, $dat[1], '$tgl', '$wkt')") or die(mysqli_error($mysqli));


          //unset($_SESSION['pesanan'][$i]);

    }


    function cek_id($val, $mysqli)
    {
      $res = mysqli_query($mysqli, "SELECT * FROM table_menu where nama_menu = '$val'");
      $data = mysqli_fetch_array($res);
      return $data[0];
    }

    
?>

<script type="text/javascript">
  
</script>

</body>
</html>



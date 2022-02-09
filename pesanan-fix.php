<?php include "template/top.php"; ?>


 <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">Pesanan Berhasil Dipesan!</h3>


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



                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>



<?php include "template/bottom.php"; ?>


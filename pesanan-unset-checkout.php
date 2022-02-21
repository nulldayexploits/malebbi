<?php 
    session_start();    
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);      
    include('admin/config/connect-db.php'); 

    $id   = $_GET['key'];
    $dat = explode('||', $_SESSION['cetak'][$id]);
    $i = cek_id($dat[0], $mysqli);

    $result = mysqli_query($mysqli, "DELETE FROM table_transaksi 
                                    WHERE id_menu = $i 
                                    AND nomor_meja = '$_SESSION[meja]' 
                                    AND session_meja = '$_SESSION[ses_cetak]'") or die(mysqli_error($mysqli));
    
    if($result){
      unset($_SESSION['cetak'][$_GET['key']]);
    }

        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                  window.location.href = "checkout.php";
                });

            </script>';
    
    function cek_id($val, $mysqli)
    {
      $res = mysqli_query($mysqli, "SELECT * FROM table_menu where nama_menu = '$val'");
      $data = mysqli_fetch_array($res);
      return $data[0];
    }

?>
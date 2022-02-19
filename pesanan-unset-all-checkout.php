<?php 
    session_start();    
    
    unset($_SESSION['cetak']);

    
        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                    alert("Berhasil Membatalkan Semua Pesanan!");
                  window.location.href = "checkout.php";
                });

            </script>';
    
?>
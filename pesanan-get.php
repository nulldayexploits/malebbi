<?php 
    session_start();          

    if(isset($_SESSION['pesanan'])){
       
        $menu=$_GET['menu'];  
        
        $comm = array_push($_SESSION['pesanan'],$menu); 

    }else{

        $_SESSION['pesanan']=array();
       
        $menu=$_GET['menu'];  
        
        $comm = array_push($_SESSION['pesanan'],$menu); 

    }

     if($comm)
     {
        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) {
                  alert("Pesanan Berhasil Ditambahkan"); 
                  window.location.href = "'.$_GET['loadto'].'";
                });

            </script>';
     }

    //unset($_SESSION["pesanan"]);
?>
<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Malebbi Resto App</title>
  <style type="text/css">
    * {
  border: 0;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Lato, Helvetica, Arial, sans-serif;
}

a {
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  text-decoration: none;
}


/*======================================================
                          Navbar
  ======================================================*/
#navbar {
  background: #ff914d;
  color: rgb(13, 26, 38);
  position: fixed;
  top: 0;
  height: 60px;
  line-height: 60px;
  width: 100vw;
  z-index: 10;
}

.nav-wrapper {
  margin: auto;
  text-align: center;
  width: 70%;
} @media(max-width: 768px) {
    .nav-wrapper {
      width: 90%;
    }
  } @media(max-width: 638px) {
      .nav-wrapper {
        width: 100%;
      }
    } 


.logo {
  float: left;
  margin-left: 28px;
  font-size: 1.5em;
  height: 60px;
  letter-spacing: 1px;
  text-transform: uppercase;
} @media(max-width: 768px) {
    .logo {
/*       margin-left: 5px; */
    }
  }

#navbar ul {
  display: inline-block;
  float: right;
  list-style: none;
  /* margin-right: 14px; */
  margin-top: -2px;
  text-align: right;
  transition: transform 0.5s ease-out;
  -webkit-transition: transform 0.5s ease-out;
} @media(max-width: 640px) {
    #navbar ul {
      display: none;
    }
  } @media(orientation: landscape) {
      #navbar ul {
        display: inline-block;
      }
    }

#navbar li {
  display: inline-block;
}

#navbar li a {
  color: white;
  display: block;
  font-size: 0.7em;
  height: 50px;
  letter-spacing: 1px;
  margin: 0 20px;
  padding: 0 4px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  font-weight: bold;
}

#navbar li a:hover {
  /* border-bottom: 1px solid rgb(28, 121, 184); */
  color: rgb(28, 121, 184);
  transition: all 1s ease;
  -webkit-transition: all 1s ease;
}

/* Animated Bottom Line */
#navbar li a:before, #navbar li a:after {
  content: '';
  position: absolute;
  width: 0%;
  height: 1px;
  bottom: -1px;
  background: rgb(13, 26, 38);
}

#navbar li a:before {
  left: 0;
  transition: 0.5s;
}

#navbar li a:after {
  background: rgb(13, 26, 38);
  right: 0;
  /* transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1); */
}

#navbar li a:hover:before {
  background: rgb(13, 26, 38);
  width: 100%;
  transition: width 0.5s cubic-bezier((0.22, 0.61, 0.36, 1));
}

#navbar li a:hover:after {
  background: transparent;
  width: 100%;
  /* transition: 0s; */
}



/*======================================================
                    Mobile Menu Menu Icon
  ======================================================*/
@media(max-width: 640px) {
  .menuIcon {
    cursor: pointer;
    display: block;
    position: fixed;
    right: 15px;
    top: 20px;
    height: 23px;
    width: 27px;
    z-index: 12;
  }

  /* Icon Bars */
  .icon-bars {
    background: rgb(13, 26, 38);
    position: absolute;
    left: 1px;
    top: 45%;
    height: 2px;
    width: 20px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
  } 

  .icon-bars::before {
    background: rgb(13, 26, 38);
    content: '';
    position: absolute;
    left: 0;
    top: -8px;
    height: 2px;
    width: 20px;
/*     -webkit-transition: top 0.2s ease 0.3s;
    transition: top 0.2s ease 0.3s; */
    -webkit-transition: 0.3s width 0.4s;
    transition: 0.3s width 0.4s;
  }

  .icon-bars::after {
    margin-top: 0px;
    background: rgb(13, 26, 38);
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    height: 2px;
    width: 20px;
/*     -webkit-transition: top 0.2s ease 0.3s;
    transition: top 0.2s ease 0.3s; */
    -webkit-transition: 0.3s width 0.4s;
    transition: 0.3s width 0.4s;
  }

  /* Bars Shadows */
  .icon-bars.overlay {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 20px;
    animation: middleBar 3s infinite 0.5s;
    -webkit-animation: middleBar 3s infinite 0.5s;
  } @keyframes middleBar {
      0% {width: 0px}
      50% {width: 20px}
      100% {width: 0px}
    } @-webkit-keyframes middleBar {
        0% {width: 0px}
        50% {width: 20px}
        100% {width: 0px}
      }

  .icon-bars.overlay::before {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 10px;
    animation: topBar 3s infinite 0.2s;
    -webkit-animation: topBar 3s infinite 0s;
  } @keyframes topBar {
      0% {width: 0px}
      50% {width: 10px}
      100% {width: 0px}
    } @-webkit-keyframes topBar {
        0% {width: 0px}
        50% {width: 10px}
        100% {width: 0px}
      }

  .icon-bars.overlay::after {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 15px;
    animation: bottomBar 3s infinite 1s;
    -webkit-animation: bottomBar 3s infinite 1s;
  } @keyframes bottomBar {
      0% {width: 0px}
      50% {width: 15px}
      100% {width: 0px}
    } @-webkit-keyframes bottomBar {
        0% {width: 0px}
        50% {width: 15px}
        100% {width: 0px}
      }


  /* Toggle Menu Icon */
  .menuIcon.toggle .icon-bars {
    top: 5px;
    transform: translate3d(0, 5px, 0) rotate(135deg);
    transition-delay: 0.1s;
    transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .menuIcon.toggle .icon-bars::before {
    top: 0;
    transition-delay: 0.1s;
    opacity: 0;
  }

  .menuIcon.toggle .icon-bars::after {
    top: 10px;
    transform: translate3d(0, -10px, 0) rotate(-270deg);
    transition-delay: 0.1s;
    transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .menuIcon.toggle .icon-bars.overlay {
    width: 20px;
    opacity: 0;
    -webkit-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
  }
}


/*======================================================
                   Responsive Mobile Menu 
  ======================================================*/
.overlay-menu {
  background: lightblue;
  color: rgb(13, 26, 38);
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  right: 0;
  padding-right: 15px;
  transform: translateX(-100%);
  width: 100vw;
  height: 100vh;
  -webkit-transition: transform 0.2s ease-out;
  transition: transform 0.2s ease-out;
}

.overlay-menu ul, .overlay-menu li {
  display: block;
  position: relative;
}

.overlay-menu li a {
  display: block;
  font-size: 1.8em;
  letter-spacing: 4px;
/*   opacity: 0; */
  padding: 10px 0;
  text-align: right;
  text-transform: uppercase;
  -webkit-transition: color 0.3s ease;
  transition: color 0.3s ease;
/*   -webkit-transition: 0.2s opacity 0.2s ease-out;
  transition: 0.2s opacity 0.2s ease-out; */
}

.overlay-menu li a:hover,
.overlay-menu li a:active {
  color: rgb(28, 121, 184);
  -webkit-transition: color 0.3s ease;
  transition: color 0.3s ease;
}
  </style>





<style type="text/css">
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 70%;
  margin: 70px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>


</head>



<body>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<nav id="navbar" class="">
  <div class="nav-wrapper">
    <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="#home"></a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="index.php">Menu Pemesanan</a></li><!--
   --><li><a href="menu_rekomendasi.php">Menu Rekomendasi</a></li><!--
   --><li><a href="login.php">Login</a></li>
    </ul>
  </div>
</nav>


<!-- Menu Icon -->
<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
</div>


<div class="overlay-menu">
  <ul id="menu">
      <li><a href="index.php">Menu Pemesanan</a></li><!--
   --><li><a href="menu_rekomendasi.php">Menu Rekomendasi</a></li><!--
   --><li><a href="login.php">Login</a></li>
    </ul>
</div>

<h2 style="color:black;margin-top: 70px;margin-left: 70px;">Menu Rekomendasi Untuk Anda</h2>
<?php


  include('admin/config/connect-db.php'); 

  # Deklarasi Variabel
  $key_kepentingan = array();
  $val_kepentingan = array();
  $data            = array();
  $kep1            = array();
  $kep2            = array();
  $kep3            = array();
  $kep4            = array();
  $normalisasi     = array();
  $hasil           = array();

  # Nilai Kepentingan
  $i = 0;
  $r = mysqli_query($mysqli, "SELECT * FROM table_setting_saw");
  while($e = mysqli_fetch_array($r)) {
    
     $key_kepentingan[$i] = $e['kepentingan']; 
     $val_kepentingan[$i] = $e['nilai_kepentingan']; 
     
     $i++;

  }  


  # Prepare Data
  $j = 0;
  $result = mysqli_query($mysqli, "SELECT * FROM table_menu");
  while($d = mysqli_fetch_array($result)) { 
    
    $r = mysqli_query($mysqli, "SELECT COUNT(*) tot FROM table_transaksi WHERE id_menu = $d[id]");
    $rc = mysqli_fetch_array($r);
    $s = mysqli_query($mysqli, "SELECT COUNT(*) tot FROM table_transaksi");
    $rs = mysqli_fetch_array($s);

    $trasaksi = number_format(($rc['tot']/$rs['tot'])*100,2);


    $data[$j] = array(
                     $d['nama_menu'],
               $d['harga'],
               $d['type_makanan'],
               $d['kalori'],
               $trasaksi,
               $d['gambar']
              );

    $kep1[$j]  = $d['harga'];  
    $kep2[$j]  = $d['type_makanan'];  
    $kep3[$j]  = $d['kalori'];  
    $kep4[$j]  = $trasaksi;

    $j++;  
  
  }


  # Mendapatkan Nilai Pembagi
  $kep1_pembagi = min($kep1);
  $kep2_pembagi = max($kep2);
  $kep3_pembagi = max($kep3);
  $kep4_pembagi = max($kep4);

  


  # Tahap Normalisasi  
  $k = 0;
  foreach ($data as $dd) {
    
    $normalisasi[$k] = array(
                         $dd[0],
                         $dd[1],
                         $dd[2],
                         $dd[3],
                         $dd[4],
                         $dd[5],
                   $kep1_pembagi/$dd[1],
                   $dd[2]/$kep2_pembagi,
                   $dd[3]/$kep3_pembagi,
                   $dd[4]/$kep4_pembagi
                );
    $k++;
  
  }



  # Get Hasil
  $x = 0;
  foreach ($normalisasi as $nn) {
    
    $hasil[$x] = array(
                       $nn[0],
                       $nn[1],
                       $nn[2],
                       $nn[3],
                       $nn[4],
                       $nn[5],
                       ($nn[1]*$val_kepentingan[0])+
                       ($nn[2]*$val_kepentingan[1])+
                       ($nn[3]*$val_kepentingan[2])+
                       ($nn[4]*$val_kepentingan[3])
              ); 

    $x++;

  }
  
  $keys = array_column($hasil, 6);
  array_multisort($keys, SORT_DESC, $hasil);

  # Deklarasi Header Tabel
  $Hdata        = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar");
  $Hnormalisasi = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar","Normalisasi Harga","Normalisasi Type Makanan","Normalisasi Kalori", "Normalisasi Trasaksi");
  $Hhasil       = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar","Hasil Akhir");



 

  // function displayDataMultidimentions($var,$title,$header)
  // {
  
  // $tab  = "<h2>".$title."</h2>";
  // $tab .= "<table border=1 style='border-collapse:collapse;width:50%'>";
  
  // $tab .= "<tr>";
  // foreach ($header as $hh) {
  //   $tab .= "<th>$hh</th>";
  // }
  // $tab .= "</tr>";

  // foreach ($var as $gg) {
  //    $tab .= "<tr>";
  //    foreach ($gg as $g) {
  //    $tab .= "<td><center>".$g."</td>"; 
  //    }    
  //    $tab .= "</tr>";
  // }   
  
  // $tab .= "</table><br><br>";

  // echo $tab;

  // }

  // displayDataMultidimentions($hasil,'Hasil Akhir',$Hhasil);
    

echo '<table style="width: 100%;">';

$no=1;
foreach ($hasil as $df) { 
?>
  
  <?php if($no==1){ echo "<tr>"; }?>
  
    <td>
      
      <div class="card">
        <img src="admin/gambar/<?php echo $df[5]; ?>" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b><?php echo $df[0]; ?></b></h4> 
          <p>Rp. <?php echo number_format($df[1]); ?></p> 
          <p>Kalori: <?php echo number_format($df[3]); ?> kkal</p> 
        </div>
      </div>

    </td>

  <?php if($no==3){ echo "</tr>"; $no=0; } ?>
  
  <?php $no++; ?>


<?php } ?>

</table>

<script type="text/javascript">
  
</script>

</body>
</html>
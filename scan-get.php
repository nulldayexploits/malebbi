<?php

 session_start();

 $_SESSION['meja'] = $_GET['meja'];
 
 unset($_SESSION['pesanan']);

 if(isset($_SESSION['meja']))
 {
 	echo '<script type="text/javascript">

			document.addEventListener("DOMContentLoaded", function(event) { 
			  window.location.href = "index.php";
			});

		</script>';
 }

?>


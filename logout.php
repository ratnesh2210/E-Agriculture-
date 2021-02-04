<?php     
         session_start();
         session_destroy();
         echo "Redirecting to the Start Page";
		 header('Location:firstpage.php');
?>
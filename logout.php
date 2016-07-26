<?php
        session_start();
		 $_SESSION['USER']=NUll;
		 $_SESSION['PASS']=NUll;
		 session_destroy();
		 header('location:login.php');
?>
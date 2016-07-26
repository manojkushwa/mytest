<?php
  session_start();
  if($_SESSION['USER'] == Null){
	 header('location:login.php');
  }
?>
<div style="width:100%; height:200px; background:#ccc;">
   <h2 style="font-size:40px;padding:5px;color:#f21;text-align:center;">WELCOME USER</h2>
</div>
<a href="logout.php">Logout</a>
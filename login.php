<?php
   session_start();
    include ('config.php');
   if(isset($_POST['submit'])){
	  $Username=$_POST['username']; 
      $Password =$_POST['password'];
      $sql =mysql_query("SELECT * FROM login WHERE username ='$Username' AND Password = '$Password'");	  
       $row =mysql_fetch_array($sql);	
        if($row != Null){
		 $f_User =$row['username'];
		 $f_Pass =$row['Password'];
		 $f_Role =$row['role'];
		 $_SESSION['USER']=$f_User;
		 $_SESSION['PASS']=$f_Pass;
		 $_SESSION['ROLE']=$f_Role;
		 if($f_Role == 'admin'){		 
	       header('location:Admin.php');	 
		 }
		 if($f_Role == 'user'){
			 header('location:User.php');
		 } 
	 }else{
		echo "Username and password is failde!"; 
	 }	  
   }
?>
<html>
   <head></head>
   <body>
       <form method="post" action="#">
	        <p>Username<br><input type="text" name="username"></p>
			<p>Password<br><input type="password" name="password"></p>
			<p><input type="submit" name="submit" value="Login"></p>
	   </form>
	    <a href="index.php">Sing In</a>
   </body>
</html>
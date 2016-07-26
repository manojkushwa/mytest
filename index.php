<?php
 include ('config.php');
 $msg ='';
  if(isset($_POST['reg'])){
	  $Username =$_POST['username'];
	  $Password =$_POST['password'];
	  $Email =$_POST['email'];
	  $Phone =$_POST['phone'];
	  $Gender =$_POST['gender'];
	  $Role ="user";
	  
	  $sql ="INSERT INTO registar(usename,password,email,Phone,gender,role)VALUES('$Username','$Password','$Email','$Phone','$Gender','$Role')";
	  mysql_query($sql);
	  
	  $query =mysql_query("SELECT password,email,role FROM registar WHERE role ='user'");
	   while($row =mysql_fetch_array($query)){ 
        $email =$row['email'];
        $password =$row['password'];
        $role =$row['role'];		   
	   }
	   $sql_f ="INSERT INTO `login`(username,Password,role)VALUES('$email','$password','$role')";
	   mysql_query($sql_f);
	  $msg= "Registration Successfull!";
  }
?>
<html>
   <head></head>
   <body>
       <form method="post" action="#">
	        <p>Username<br><input type="text" name="username"></p>
			<p>Password<br><input type="password" name="password"></p>
			<p>Email<br><input type="email" name="email"></p>
			<p>Phone<br><input type="text" name="phone"></p>
			<p>Gender<br><input type="radio" name="gender" value="male">male
			<input type="radio" name="gender" value="female">female</p>
			<p><input type="submit" name="reg" value="Sing in"></p>
	   </form>
	   <p style="color:green"><?php if(isset($msg)){echo $msg;}?></p>
	   <a href="login.php">Sing Up</a>
   </body>
</html>
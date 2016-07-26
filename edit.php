<?php
     include('config.php');
	$id=$_GET['id'];
    if(isset($_POST['up'])){
      $Username =$_POST['username'];
	  $Password =$_POST['password'];
	  $Email =$_POST['email'];
	  $Phone =$_POST['phone'];
	  $Gender =$_POST['gender'];
	  $query ="update registar set usename='$Username',password='$Password',email='$Email',Phone='$Phone ',gender='$Gender' where id='$id'";
	  mysql_query($query);
	  echo $id=$_GET['id'];
	  echo "<script>
	        alert('Update Successfull! data!')
	    window.location.href='edit.php';  
	  </script>";
		
	}
?>
<html>
   <head></head>
   <body>
   
  <?php
   
    $sql="select *from registar where id='$id'";
	$res= mysql_query($sql);
	while($row = mysql_fetch_array($res)){	
  ?>
       <form method="post" action="#">
	        <p>Username<br><input type="text" name="username"  value="<?php echo $row['usename'];?>"></p>
			<p>Password<br><input type="text" name="password" value="<?php echo $row['password'];?>"></p>
			<p>Email<br><input type="email" name="email" value="<?php echo $row['email'];?>"></p>
			<p>Phone<br><input type="text" name="phone" value="<?php echo $row['Phone'] ;?>"></p>
			<p>Gender<br><input type="radio" name="gender" value="male">male
			<input type="radio" name="gender" value="female">female</p>
			<p><input type="submit" name="up" value="Update"></p>
	   </form>
	 <?php
	}
	 ?>
   </body>
</html>
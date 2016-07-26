<?php
  session_start();
  if($_SESSION['USER'] == Null){
	 header('location:login.php');
  }
?>
<div style="width:100%; height:200px; background:#ccc;">
   <h2 style="font-size:40px;padding:5px;color:#f21;text-align:center;">WELCOME ADMIN</h2>
</div>
<a href="logout.php">Logout</a>


<table border="1" cellpadding="5px" cellspacing="0px" width="500px" align="center">
  <caption><h3>STUDENT ROCORD</h3></caption>
      <tr>
	      <th>Id</th>
		  <th>Name</th>
		  <th>Password</th>
		  <th>Email</th>
		  <th>Phone</th>
		  <th>Gender</th>
		  <th>Edit/veiw</th>
		  <th>Delete</th>
	  </tr>
	    <?php
        include('config.php');
	      $sql="select *from registar";
	    $result=mysql_query($sql);
	     while($row=mysql_fetch_array($result)){
  ?>
	  <tr>
	       <td><?php echo $row['id'];?></td>
		   <td><?php echo $row['usename'];?></td>
		   <td><?php echo $row['password'];?></td>
		   <td><?php echo $row['email'];?></td>
		   <td><?php echo $row['Phone'];?></td>
		   <td><?php echo $row['gender'];?></td>
		   <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit/veiw</a></td>
		   <td><a href="#">Delete</a></td>
	  </tr>
	  <?php
	   }
	  ?>
</table>
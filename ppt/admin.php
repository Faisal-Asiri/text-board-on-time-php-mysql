
<!DOCTYPE html>
<html dir=rtl>
<head>

	<title>atintion</title>
	
	  <script src="https://cdn.tiny.cloud/1/vdtsmfrfvtnk07ftq54pzfxvcpthg0kmdcxyfmhsctejqd2k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<div class="w3-container">
<body>
	
<form method="POST" enctype="multipart/form-data">
	<?php
							require("db.php");
							
$sql="select msg from msgs ORDER BY id DESC LIMIT 1; ";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {



echo'<textarea name="msg" required>';

echo$row['msg'];
echo'</textarea>';

}

 ?>
	
	<center>
	<input type="submit" name="submit"><br>
	  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>

	
</form></center>
<?php 
require_once('connect.php');






if (isset($_POST["submit"])) {
  

  
  $msg = mysqli_real_escape_string($connection, $_POST['msg']);
  
	
	$sql = "INSERT INTO `msgs` (msg) VALUES ('$msg')";
	$result = mysqli_query($connection, $sql);
	if($result){
		echo"sended <meta HTTP-EQUIV='REFRESH' content='0; url=admin.php'/>";
	}else{
		echo"not ok proothhhher";
	}
}

 ?>
</body></div>
</html>
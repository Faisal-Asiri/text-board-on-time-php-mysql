<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
	<title>view</title>
	<style type="text/css">
body {
  background-color: #000;
 
     font-family: bodyfont;
     padding-right: 130px;
     padding-left: 130px;
     color: white;
}
@font-face {
  font-family: bodyfont;
  src: url(sst-arabic-light.ttf);
}

#demo{
  font-size: 100px;
  text-align: center;
  background-color: orange;
  color: black;
}
</style>

</head>
<body>

<div class="title">


 




<h1>

<?php
							require("db.php");
							
$sql="select msg from msgs ORDER BY id DESC LIMIT 1; ";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {





echo$row['msg'];


}

 ?>




 </h1></div>

 </body>
</html>
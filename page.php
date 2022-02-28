<?php
require_once("connect.php");
if($conn == false){
	echo "Досведанья, мистер лох!";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM $dbarticles WHERE id_teacher='$page' ");
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Информация об учителях</title>
</head>
<body>
<?php
$article = mysqli_fetch_assoc($query);
?>

</div>
</div>
</div>
</body>
</html>

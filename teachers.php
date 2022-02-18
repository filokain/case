<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Учителя</title>
</head>
<body>
<style>
.card {
width: 30%;
margin-left: 3%;
}
</style>
<div class="container mt-5" align="center">
<div class="d-flex flex-wrap">
<?php
require_once("connect.php");
if($conn == false){
	echo "Досведанья, мистер лох!";
	echo mysqli_connect_errno();
	exit();
}
$query = mysqli_query($conn, "SELECT * FROM $dbarticles");
if(mysqli_num_rows($query) == 0){
	echo "А база-то пустая.";
}	else {
  for ($i=0; $i <=9 ; $i++){
while($article = mysqli_fetch_assoc($query)){
	echo
  '<div class="card mb-4 shadow-sm">  <div class="card-header">
  <h4 class="my-0 font-weight-normal">'
  .$article['teacher_name'].'</a></h4><br></div>';
  echo '<div class="card-body"><img src="'.$article['pic'].'""class="img-thumbnail"
width = "300px" height = "300px"><br>
  <ul class="list-unstyled mt-3 mb-4">
  <li><p style="color: gold; font-size: 250%;">'.$article['teacher_rating'].'</p></li>
  </ul>
  <a href=page.php?id='.$article['id_teacher'].'>
  <button type="button" class="btn btn-lg btn-block">Подробнее</button></a>

  </div></div>';

}
echo '</div></div>';
}
	}
?>

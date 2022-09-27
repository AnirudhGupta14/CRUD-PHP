<?php

$student_id = $_POST["id"];
$name = $_POST["name"];
$branch = $_POST["branch"];
$age = $_POST["age"];

$conn = mysqli_connect("localhost","root","","CRUDOperation") or die("Connection Failed");

$sql = "UPDATE students SET full_name = '{$name}',branch = '{$branch}',age = '{$age}' WHERE student_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}
?>
<?php

$student_id = $_POST["student_id"];
$full_name = $_POST["full_name"];
$branch = $_POST["branch"];
$age = $_POST["age"];

$conn = mysqli_connect("localhost","root","","CRUDOperation") or die("Connection Failed");

$sql = "INSERT INTO students(student_id, full_name, branch, age) VALUES ('{$student_id}','{$full_name}', '{$branch}','{$age}')";

if(mysqli_query($conn, $sql))
{
  echo 1;
}
else
{
  echo 0;
}
?>
<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","CRUDOperation") or die("Connection Failed");

$sql = "SELECT * FROM students WHERE student_id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                    <td width='90px'>Name</td>
                    <td><input type='text' id='edit-name' value='{$row["full_name"]}'>
                        <input type='number' id='edit-id' hidden value='{$row["student_id"]}'>
                    </td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td><input type='text' id='edit-branch' value='{$row["branch"]}'></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type='number' id='edit-age' value='{$row["age"]}'></td>
                </tr>
                <tr>
                    <td><input type='submit' id='edit-submit' value='save'></td>
                </tr>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
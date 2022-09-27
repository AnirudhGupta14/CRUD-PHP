<?php

$conn = mysqli_connect("localhost","root", "", "CRUDOperation") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 )
{
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Rollno</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Age</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result))
              {
                $output .= "<tr>
                                <td align='center'>{$row["student_id"]}</td>
                                <td align='center'>{$row["full_name"]}</td>
                                <td align='center'>{$row["branch"]}</td>
                                <td align='center'>{$row["age"]}</td>
                                <td align='center'>
                                    <button class='edit-btn' data-id='{$row["student_id"]}'>Edit</button>
                                </td>
                                <td align='center'>
                                    <button class='delete-btn' data-id='{$row["student_id"]}'>Delete</button>
                                </td>
                            </tr>";
              }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}
else
{
    echo "<h2>No Record Found.</h2>";
}
?>
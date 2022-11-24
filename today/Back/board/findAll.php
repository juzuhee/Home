<?php
require "../auth/conn.php";

$sql  = "select * from sujin_board";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_all($result);

print_r($row);
echo "<br/>";

print_r($row[0]);
print_r($row[0][0]);
print_r($row[0][1]);

for(){
    
}
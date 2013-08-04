<?php
$conn=mysqli_connect("localhost","root","","lampp");

$info=mysqli_get_host_info($conn);

$result=$conn->query("SELECT * FROM email;");


while($row=$result->fetch_array()){
print_r($row);
	print $row["email"]."\n";
	print_r($row);
}

$result->free();
echo "$info\n";

mysqli_close($conn);
?>
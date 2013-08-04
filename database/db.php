<?php

$client=@new mysqli("localhost","root","","lampp");

if($client->connect_errno){
	die("error to connent to db");
}

$result=$client->query("select * from email limit 0,10");

while($record=$result->fetch_array()){
	echo $record['email']."\n";
}

$result->free();


$prepareStatement=$client->prepare("SELECT * FROM email where email=? and id=?");

$prepareStatement->bind_param('si',$email,$id);

$email="yangqichris@gmail.com";

$id=1;

$prepareStatement->execute();


$client->close();

?>
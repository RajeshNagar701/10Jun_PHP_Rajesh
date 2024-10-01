<?php
$con=new mysqli("localhost","root","","railway");
$sql="select * from location";
$res=$con->query($sql);
while($fetch=$res->fetch_object())
{
	$arr[]=$fetch;		
}

foreach($arr as $c)
{
	echo $c->id . "<br>";
	echo $c->loc_name . "<br>";
	
}


?>
 
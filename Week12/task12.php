<?php
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
$basket = null;
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
else{
	$basket = [];
}
for ($i=0; $i < count($cars); $i++) { 
	if(in_array($cars[$i]["id"], $basket))
		echo  $cars[$i]["maker"]." ".$cars[$i]["model"]." "."Already in Basket"."<br/>";
	else
		echo $cars[$i]["maker"]." ".$cars[$i]["model"]." "."<a href='task12_1.php?id=".$cars[$i]["id"]."'>Add to Basket</a>"."<br/>";
}
echo "<h1>In Basket</h1>";
echo "Items with id:";
for($j=0;$j<count($basket);$j++){
	echo $basket[$j].' ';
}
?>
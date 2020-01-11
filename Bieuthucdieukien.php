<<?php $today="Thứ hai";
if($today=="Thứ hai")
{
	echo "Hôm nay là thứ hai";
	echo "<br>";
}
$today=($today==2)?2:3 ;
//Nếu giá trị của today=2 thì in ra 2 còn nếu sai thì in ra 3
echo $today;
echo "<br>";
$n=10;
$so=($n%2==0)?"Chẵn":"lẻ";
echo $so;
echo "<br>";
$day="Thứ ba";
if($day=="Thứ hai")
{
	echo "Hôm nay là ngày đầu tuần";
}
else{
	echo "Hôm nay không phải ngày đầu tuần";
	echo "<br>";
}	
$today1="Chủ nhật";
switch ($today1){
	case "Chủ nhật";
		echo "Ngày cuối tuần";
		break;
	case "Thứ hai";
		echo "Ngày đầu tuần";
		break;
	default:
	echo "Ngày trong tuần";
	break;
}
 ?>
 <<?php 
 $n=10;
 $i=2;
 while($i<sqrt(10)){
 	if($n%$i==0){
 		echo "Không phải snt";
 		exit;
 	}
 	$i++;
 }
echo "$n là snt";


echo "<table border='1'>";
echo "<br>";
for($a=2;$a<=10;$a++)
{
	echo "<td>";
	for($b=1;$b<=10;$b++)
	{
		echo "$a x $b=".$a*$b."<br>";
	}
	echo "<td>";
}	
echo "</tr>";
echo "</table>";
 ?>


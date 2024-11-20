<?php
$compt=file("compt.txt")[0];
$count=str_pad($compt, 6,"0",STR_PAD_LEFT);
// echo $count;
for($i=0; $i<6; $i++)
	echo "<img src='". $count[$i].".png'  height= 32>";
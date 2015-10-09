<?php

//table.php
require_once ("6.php");
$car_list = getCarData();
//var_dump($car_list);
?>
<table border=1>
	<tr>
		<th>id</th>
		<th>auto nr märk</th>
		<th>user ID</th>
		<th>värv</th>
	</tr>
	<?php
		//iga massiivis oleva elemendi kohta
		//count()
		for ($i = 0; $i < count($car_list); $i=$i+1){
					//$i=$i+1; saab lihtsamalt $i++;	
			echo "<tr>";
			echo "<td>".$car_list[$i]->id1."</td>";
			echo "<td>".$car_list[$i]->number_plate1."</td>";
			echo "<td>".$car_list[$i]->user_id1."</td>";
			echo "<td>".$car_list[$i]->color1."</td>";
			echo "</tr>";
			
		
		}
	
	
	?>


</table>
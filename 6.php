<?php
//functions.php
require_once("../../configglobal.php");
$database = "if15_kaurkal";
//loome uue funktsiooni, et kysida andmebaasist andmeid (car_plates on tabeli nimi)
function getCarData(){
	
	$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
	$stmt=$mysqli->prepare("SELECT id, user_id, number_plate, color FROM car_plates");
	$stmt->bind_result($id, $user_id, $number_plate, $color_from_Databeiss);
	$stmt->execute();
	
	//tyhi massiiv, kus hoiame objekte (1 rida andmeid)
	$array = array();
	
	
	
	
	
	
	
	
	
	
	
	//te tsyklit nii mitu korda, kuni saad andmebaasist �he rea andmeid
	while($stmt->fetch()){
		//loon objekti iga while tsykli kord
		$car = new StdClass();
		$car->id = $id;
		$car->number_plate = $number_plate;
			
		array_push($array, $car);
		
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
		// var_dump annab infi, mis string/int jne on, echo "<pre>" j�tab vormingu alles	
$stmt->close();
$mysqli->close();
}









/*punkti n�ide

$name="Kaur"; <<<m��rame muutuja
echo "Tere ".$name; <<<lisame muutuja. Stringile ei saa lihtsalt $name otsa kirjutada, vaid peab olema punkt
*/





?>
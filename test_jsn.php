<?php
///////
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dtbs="test";
$myPassword="";
$myUser="root";
$myServer="localhost";
$conn = new mysqli("$myServer", "$myUser", "$myPassword", "$dtbs" );

$result = $conn->query("SELECT match_day, home, away,skor FROM super_leage");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
	$outp .= '{"Matchday":"'  . $rs["match_day"] . '",';
    $outp .= '"Home":"'  . $rs["home"] . '",';
    $outp .= '"Away":"'   . $rs["away"]        . '",';
    $outp .= '"Skor":"'. $rs["skor"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
/////////////////////////////////////////////


class Car {
     function Car($car,$year) {
         $this->model = $car;
		 $this->year = $year;
		 
     }
}
// create an object
$car1 = new Car("bvw","2016");
$car2 = new Car("Vw" , "2014");
$car3 = new Car("Citroen", "2000");

// show object properties
//echo "<p>".$car1->model;
//echo $car1->year;
//echo $car2->model;
//echo $car2->year;
//echo $car3->model;
//echo $car3->year;
$outp2 = "[";
	$outp2 .= '{"model":"'   . $car1->model   . '",';
    $outp2 .= '"year":"'. $car1->year     . '"},';
	$outp2 .= '{"model":"'   . $car2->model    . '",';
    $outp2 .= '"year":"'. $car2->year     . '"},';
	$outp2 .= '{"model":"'   . $car3->model        . '",';
    $outp2 .= '"year":"'. $car3->year     . '"}';
$outp2 .="]";
//echo $outp2;
?>
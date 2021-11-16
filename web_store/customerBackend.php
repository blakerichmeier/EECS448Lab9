<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$qi1= $_POST["q0"];
$qi2= $_POST["q1"];
$qi3 = $_POST["q2"];
$ship = $_POST["ship"];

$st1 = $qi1 * 200;
$st2 = $qi2 * 300;
$st3 = $qi3 * 400;

$total = $st1 +$st2 +$st3;
$shipcost = 0;

if($ship == "express"){
  $shipcost = 0;
  $total = $total + 0;
}
else if($ship == "over night"){
  $total = $total + 50;
  $shipcost = 50;
}
else if($ship == "3 day"){
  $total = $total + 5;
  $shipcost = 5;
}

echo '<link href="style.css" rel="stylesheet" type="text/css"/>';

echo "Hello Customer! </br></br>";
echo "Userame: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br></br>";

echo "<table>";
echo "<tr> <td> </td> <td>Quantity  </td><td>Cost Per Item  </td><td>Sub Total  </td></tr>";
echo "<tr> <td> Item 1</td> <td>".$qi1."</td><td>$200</td><td>$".$st1."</td></tr>";
echo "<tr> <td> Item 2</td> <td>".$qi2."</td><td>$300</td><td>$".$st2."</td></tr>";
echo "<tr> <td> Item 3</td> <td>".$qi3."</td><td>$400</td><td>$".$st3."</td></tr>";
echo "<tr> <td> Shipping</td> <td>".$ship."</td><td>$".$shipcost."</td></tr>";
echo "<tr> <td> Total</td> <td>$".$total."</tr>";
echo "</table>"
?>

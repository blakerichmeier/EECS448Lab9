<?php
//access the global array called $_POST to get the values from the text fields
$a1 = $_POST["q1"];
$a2 = $_POST["q2"];
$a3 = $_POST["q3"];
$a4 = $_POST["q4"];
$a5 = $_POST["q5"];
$a6 = $_POST["q6"];

$score = 0;
echo "<text>Question 1: How Old is Lebron James? </text> </br> <text>Correct Answer: 36</text> </br> <text>Your Answer:</text>" ;
echo $a1 . "</br></br>";

if($a1 == "36")
{
  $score = $score + 1;
}

echo "<text>Question 2: Capital of Texas? </text> </br> <text>Correct Answer: Austin</text> </br> <text>Your Answer:</text>" ;
echo $a2 . "</br></br>";

if($a2 == "Austin")
{
  $score = $score + 1;
}

echo "<text>Question 3: Mascot For the University of Kansas? </text> </br> <text>Correct Answer: Jayhawk</text> </br> <text>Your Answer:</text>" ;
echo $a3 ."</br></br>";

if($a3 == "Jayhawk")
{
  $score = $score + 1;
}

echo "<text>Question 4: What is the Mascot for Blue Valley High? </text> </br> <text>Correct Answer: Tiger</text> </br> <text>Your Answer:</text>" ;
echo $a4."</br></br>";

if($a4 == "Tiger")
{
  $score = $score + 1;
}

echo "<text>Question 4: What is the Mascot for University of Missouri? </text> </br> <text>Correct Answer: Tiger</text> </br> <text>Your Answer:</text>" ;
echo $a5."</br></br>";

if($a5 == "Tiger")
{
  $score = $score + 1;
}

echo "<text>Question 3: What is the Mascot for Baylor University? </text> </br> <text>Correct Answer: Bear</text> </br> <text>Your Answer:</text>" ;
echo $a6."</br></br>";

if($a6 == "Bear")
{
  $score = $score + 1;
}
$percent = ($score / 6) * 100;
echo "</br> <text>Final Score: </text>" . $score;
echo "</br> <text>Percentage Correct: </text>" . $percent . "<text>%</text>";

?>

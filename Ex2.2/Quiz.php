<?php
$grade=100;
$question1=$_POST["Q1"];
$question2=$_POST["Q2"];
$question3=$_POST["Q3"];
$question4=$_POST["Q4"];
$question5=$_POST["Q5"];
$anwsers= array("4", "Blue", "Jefferson City", "EECS 448", "4");
echo "<h4>Question 1: Which of these is a number?</h4>";
echo "<p>Your anwser: " .$question1. "</p>";
echo "<p>The Correct anwser: " .$anwsers[0]. "</p>";
if($anwsers[0]!=$question1){
$grade=$grade-20;
}

echo "<h4>Question 2: What is Blue?</h4>";
echo "<p>Your anwser: " .$question2. "</p>";
echo "<p>The Correct anwser: " .$anwsers[1]. "</p>";
if($anwsers[1]!=$question2){
$grade=$grade-20;
}


echo "<h4>Question 3: What is the Capital of Missouri?</h4>";
echo "<p>Your anwser: " .$question3. "</p>";
echo "<p>The Correct anwser: " .$anwsers[2]. "</p>";
if($anwsers[2]!=$question3){
$grade=$grade-20;
}


echo "<h4>Question 4: What class is this lab for?</h4>";
echo "<p>Your anwser: " .$question4. "</p>";
echo "<p>The Correct anwser: " .$anwsers[3]. "</p>";
if($anwsers[3]!=$question4){
$grade=$grade-20;
}


echo "<h4>Question 5: What is 2X2?</h4>";
echo "<p>Your anwser: " .$question5. "</p>";
echo "<p>The Correct anwser: " .$anwsers[4]. "</p>";
if($anwsers[4]!=$question5){
$grade=$grade-20;
}
if($grade==100){
echo "<p> Your Grade: 100% </p>";
}
else if($grade==80){
echo "<p> Your Grade: 80% </p>";
}
else if($grade==60){
echo "<p> Your Grade: 60% </p>";
}
else if($grade==40){
echo "<p> Your Grade: 40% </p>";
}
else if($grade==20){
echo "<p> Your Grade: 20% </p>";
}
if($grade==0){
echo "<p> Your Grade: 0% </p>";
}
?>
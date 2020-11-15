<?php
 echo '<link rel="stylesheet" href="style.css" type="text/css"/>';
 $username=$_POST["username"];
 $password=$_POST["password"];
 $store=array("Ellibrium", "6 Sided Dice", "20 Sided Dice");
 $price=array("60.00", "1.50", "2.00");
 $game=$_POST["game"];
 $dice1=$_POST["6dice"];
 $dice2=$_POST["20dice"];
 $total1=$price[0]*$game;
 $total2=$price[1]*$dice1;
 $total3=$price[2]*$dice2;
 $ship=$_POST["ship"];
 $fees=0.00;
 if($ship=="Free"){
  $fees=0.00;
 }
 else if($ship=="Overnight"){
  $fees=50.00;
 }
 else if($ship=="Three Days"){
  $fees=5.00;
 }
$totalAll=$total1 + $total2 + $total3 + $fees;
 echo "<h3> Welcome " .$username. "</h3>";
 echo "<h3> Your Password is: " .$password. "</h3>";
 echo "<h4> Here is your Receipt</h4><br>";
 echo '<table class="table"><tr>';
 echo "<td class='LG'> Your Receipt </td>";
 echo "<td class='LG'> Quantity </td>";
 echo "<td class='LG'> Cost Per Item </td>";
 echo "<td class='LG'> Sub Total </td></tr>";
 echo "<tr>";
 echo "<td class='LG'>" .$store[0]. "</td>";
 echo "<td class='LB'>" .$game. "</td>";
 echo "<td class='LB'>$" .$price[0]. "</td>";
 echo "<td class='LB'>$" .$total1. "</td></tr>";
 echo "<tr>";
 echo "<td class='LG'>" .$store[1]. "</td>";
 echo "<td class='LB'>" .$dice1. "</td>";
 echo "<td class='LB'>$" .$price[1]. "</td>";
 echo "<td class='LB'>$" .$total2. "</td></tr>";
 echo "<tr>";
 echo "<td class='LG'>" .$store[2]. "</td>";
 echo "<td class='LB'>" .$dice2. "</td>";
 echo "<td class='LB'>$" .$price[2]. "</td>";
 echo "<td class='LB'>$" .$total3. "</td></tr>";
 echo "<tr>";
 echo "<td class='LG'> Shipping </td>";
 echo "<td colspan='2' class='LB'>" .$ship. "</td>";
 echo "<td class='LB'>$" .$fees. "</td></tr>";
 echo "<tr>";
 echo "<td class='LG' colspan='3'> Total Cost </td>";
 echo "<td class='LG'>" .$totalAll. "</td></tr>";
 echo "</table>";
?>

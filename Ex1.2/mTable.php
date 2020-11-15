<?php
 $rows=1;
 $cols=1;
 $topRow=1;
 echo "<table class=\"table\">";
 echo "<tr>";
 echo "<td>" .X. "</td>";
 for($i=1; $i<=100; $i++){
     echo "<td>" .$topRow. "</td>";
     $topRow++;
    }
 for($rows=1; $rows<=100; $rows++){
     $cols=$rows;
     echo "<tr>";
     echo "<td>" .$cols. "</td>";
     for($cols=1; $cols<=100; $cols++){
         echo "<td>".$rows*$cols."</td>";
     }
     echo "</tr>";
 }
 echo "</table>";
?>
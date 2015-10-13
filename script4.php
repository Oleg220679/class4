<?php
     
      print "<table border=1>";
       
        print "<tr>";

        for($b = 1; $b <= $_POST['stovp']; $b++) {
        print "<td>". rand() ."</td>";
        }
        print "</tr>";
        
        for($c = 1; $c < $_POST['rows']; $c++) {print "<tr>";
        print "<td>". rand() ."</td>";
        for($b = 1; $b < $_POST['stovp']; $b++) {
        print "<td>". rand() ."</td>";
        }
        print "</tr>";
        } 
  
      print "</table>";

?>

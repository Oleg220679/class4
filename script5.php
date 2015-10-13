<?php
     htmlspecialchars ();

    if ($_POST['name'] == TRUE && $_POST['surname'] == TRUE) {
 
      print "<form action="script5.php" method="POST" id="myform">"  
      print "</form>"
print "<table border=1>" 
   print "<tr>" 
      print "<td>" 
         print "<input type="text" name="data" required form="myform">"
      print "</td>"
      print "<td>" 
         print "<input type="text" name="data" required form="myform">"
      print "</td>"
       print "<td>"  
         print "<input type="text" name="data" required form="myform">"
      print "</td>" 
   print "</tr>" 
    print "<tr>"  
      print "<td>"  
         print "<input type="text" name="data" required form="myform">"
     print "</td>"
      print "<td>"  
         print "<input type="text" name="data" required form="myform">"
      print "</td>"
       print "<td>" 
        print "<input type="text" name="data" required form="myform">" 
      print "</td>"
   print "</tr>"
    print "<tr>" 
       print "<td>"  
         print "<input type="text" name="data" required form="myform">"
     print "</td>"
     print "<td>" 
         print "<input type="text" name="data" required form="myform">"
      print "</td>"
       print "<td>" 
         print "<input type="text" name="data" required form="myform">"
      print "</td>" 
    print "</tr>"
print "</table>"
print "<input type="submit" name="add"  form="myform">"
}

else {

print "<table border=1>";
       
        print "<tr>";

        for($b = 1; $b <= 3; $b++) {
        print "<td>"$_POST['name']"</td>";
        }
        print "</tr>";
        
        for($c = 1; $c < 3; $c++) {print "<tr>";
        print "<td>"$_POST['name']"</td>";
        for($b = 1; $b < 3; $b++) {
        print "<td>"$_POST['surname']"</td>";
        }
        print "</tr>";
        } 
     print "</table>";
     }

?>

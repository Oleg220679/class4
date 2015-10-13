<?php
    
     
      switch ($_GET['operator']) {

        case '√':

                print $_GET[sqrt('numeral')];

                break;

        case 'x^2':

                print $_GET[pow('numeral', 2)];

                break;

}
     
?>

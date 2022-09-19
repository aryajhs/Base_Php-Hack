<?php
$val=98;
  switch ($val>=48 && $val<=57) {
    case 1:
        echo "Special Character";
        break;
    
        case 0: switch($val>=65 && $val<=90){
            case 1:
                echo "Smaller character";
                break;
                case 0:switch($val>=97 && $val<=122) {
                    case 1: echo "Capital character";
                    break;
                    case 0: echo "special character";
                    break;
                }
                    
        }
    
     
  }
?>

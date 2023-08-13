<?php
$age = 25;
Switch (true){
    case ($age >=15 && $age <= 20):
        echo "you are eligible.";
        break;
        case ($age >=21 && $age <=30):
            echo "you are not eligible.";
            break;
            default:
            echo "enter the valid age.";
            break;

}
?>
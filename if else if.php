<?php
$per = 95;
if ($per >= 80 && $per <=100){
    echo "you are in merit.";
}else if ($per >= 60 && $per <=79){
    echo "you are in 1st division.";
}else if ($per >= 45 && $per <=60){
    echo "you are in 2nd division.";
}else if ($per >= 33 && $per <=45){
    echo "you are in 3rd division.";
}else if ($per<33){
    echo "you are fail.";
}else{
    echo "Please enter valid percentage.";
}
?>
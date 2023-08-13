<?php
function hello($fname = "first",$lname = "last"){
    $v = "$fname $lname";
    return $v;
}

$name =  hello("system hai","bhai");
echo "hello $name";
  
?>
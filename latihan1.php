<?php
function increment(&$value){
    $value++;
}
$x = 7;
$y = 5;
increment($x);
increment($y);

echo "$x<br>";
echo "$y<br>";
?>
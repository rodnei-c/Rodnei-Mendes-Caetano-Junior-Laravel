<?php

$a = array(1,2,3,4,5);

for($i = 0;$i < 5;$i++){
print_r($a).'\n';
array_unshift($a, array_pop($a));
}

?>
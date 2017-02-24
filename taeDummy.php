<?php 
include 'Changes.php';

echo "1\n";
$ch = new Changes(100, 70);
$ch.calcChange();
echo $ch.toString();

echo "2\n";
?>
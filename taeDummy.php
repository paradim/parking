<?php 
include 'Changes.php';

echo "\n1\n";
$ch = new Changes(100, 70);

echo "\n2\n";
$ch->calcChange();
echo "\n3\n";
echo $ch->toString();

echo "\n4\n";
?>
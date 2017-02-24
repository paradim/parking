<?php 
include 'Changes.php';

echo "1\n";
$ch = new Changes(100, 70);

echo "2\n";
$ch->calcChange();
echo "3\n";
echo $ch->toString();

echo "4\n";
?>
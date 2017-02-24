<?php 
include 'Changes.php';

echo "<br/>1<br/>";
$ch = new Changes(100, 70);

echo "<br/>2<br/>";
$ch->calcChange();
echo "<br/>3<br/>";
echo $ch->toString();

echo "<br/>4<br/>";
?>
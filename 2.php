<?php
$str='Isto é um teste.';
echo "<p>$str</p>";

$prim = $str{0};
echo "<p>$prim.</p>";

$terc = $str{2};
echo "<p>$terc</p>";

$str = 'Isto ainda é um teste';
$ult = $str{strlen($str)-1};
echo "<p>$ult";
?>
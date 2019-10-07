<?php

function calcula($a,$b){
	$r=null;
	$r=$r. ($a+$b)."<br>";
	$r=$r. ($a-$b)."<br>";
	$r=$r. ($a*$b)."<br>";
	if($b!=0) $r=$r.($a/$b)."<br>";
	return $r;
}

echo calcula(3,0).calcula(8,4);

?>
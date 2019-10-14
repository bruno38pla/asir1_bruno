<?php
function tipo($a, $b, $c) {
	$r='rectangulo';
		if ($a>90 || $b>90 || $c>90) {
			$r='obtusangulo';
			}
		
		if($a<90 and $b<90 and $c<90){
			$r='acutangulo';
	}
	return $r;
}
echo tipo(30,90,60)."<br>";
echo tipo(60,60,60)."<br>";
echo tipo(30,30,120)."<br>";
?>
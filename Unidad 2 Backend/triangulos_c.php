<?php
function tipo($a,$b,$c,$d,$e,$f) {
	echo lados($a,$b,$c);
	echo angulo($d,$e,$f)."<br>";
}
function lados($a, $b, $c) {
	$r='triangulo escaleno';
		if ($a==$b || $a==$c) {
		$r='triangulo isosceles';
		}
		if($b==$c and $a==$c){
			$r='triangulo equilatero';
	}
	return $r;
}
function angulo($d, $e, $f) {
	$s=' y rectangulo';
		if ($d>90 || $e>90 || $f>90) {
			$s=' y obtusangulo';
			}
		
		if($d<90 and $e<90 and $f<90){
			$s=' y acutangulo';
	}
	return $s;
}
echo tipo(1,1,2,90,30,60)."<br>";
?>
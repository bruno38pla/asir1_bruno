<?php
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
function angulo($A, $B, $C) {
	$s=' y rectangulo';
		if ($A>90 || $B>90 || $C>90) {
			$s=' y obtusangulo';
			}
		
		if($A<90 and $B<90 and $C<90){
			$s=' y acutangulo';
	}
	return $s;
}
function triangulo($l) {
	$a=$l[0];
	$b=$l[1];
	$c=$l[2];
	
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=atan($h/($c-$x))*(360/(2*3.14));
	$B=atan($h/$x)*(360/(2*3.14));
	$C=180-($A+$B);
	
return [
	'angulos'=>[$A,$B,$C],
	'tipo_lados'=>lados($a,$b,$c),
	'tipo_angulos'=>angulo($A,$B,$C)
	];
}
echo '<pre>';
print_R( triangulo([5,5,8]))."<br>";
echo '</pre>';
?>
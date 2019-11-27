<?php
function mes($n){
	$a=[
	[
		'nombre' => 'enero',
		'dia' => '31',
		'estacion' => 'invierno'
	],
	[
		'nombre' => 'febrero',
		'dia' => '28',
		'estacion' => 'invierno'
	],
	[
		'nombre' => 'marzo',
		'dia' => '31',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'abril',
		'dia' => '30',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'mayo',
		'dia' => '31',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'junio',
		'dia' => '30',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'julio',
		'dia' => '31',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'agosto',
		'dia' => '31',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'septiembre',
		'dia' => '30',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'octubre',
		'dia' => '31',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'noviembre',
		'dia' => '30',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'diciembre',
		'dia' => '31',
		'estacion' => 'invierno'
	]
	];
	$r=null;
	$r=$r.$a[$n-1]['nombre']."<br>";
	$r=$r.$a[$n-1]['dia']."<br>";
	$r=$r.$a[$n-1]['estacion']."<br>";
	return $r;
}
echo mes(1)."<br>";
echo mes(4)."<br>";
echo mes(7)."<br>";
echo mes(10)."<br>";
?>
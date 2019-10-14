<?php
function nota($a) {
		$r='Sobresaliente';
		if ($a<8.5) {
			$r="Notable";
		}if($a<7) {
			$r= "Aprobado";
	}if($a<5) {
			$r= "Pendiente";
	}
	return $r;
}
echo nota(3)."<br>";
echo nota(6)."<br>";
echo nota(9)."<br>";
?>
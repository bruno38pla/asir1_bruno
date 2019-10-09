<?php
for($j=1;$j<=10;$j++){
	echo '<div style=" float:left; margin:20px;">';
	for($i=1;$i<=10;$i=$i+1){
		echo $j.' x '.$i.' = '.($j*$i).'<br/>';
	} 
	echo '</div>';
} 
?>


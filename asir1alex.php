

<p>Bruno</p>
<a href="http://192.168.0.85/asir1_alex/asir1alex.php">Pagina de ALEX</a>





<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
<html>
<body>
Hola <?php echo $_POST["nombre"]; ?><br>
Tu email es: <?php echo $_POST["email"]; ?>
</body>
</html>

<?php
$f=fopen('suscriptores.txt','a');
fwrite($f,$_POST['email']."\r\n");
fclose($f)
?>
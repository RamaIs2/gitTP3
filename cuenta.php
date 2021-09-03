<?php
$sueldo = $_GET['sueldo'];
$horas  = $_GET['horas'];

$Pporhora = $sueldo/$horas;
$Pporaño = $sueldo * 12;

?>
<!DOCTYPE html>
<html>
    <head>
     <title>TP3hora</title>
     <meta charset="UTF-8">
    </head>
    <body>
     <h1>Sueldo por hora, mes y año</h1>
     <?php echo "<p>Se te paga la hora = $Pporhora </p>"; ?>
     <?php echo "<p>Se te paga el mes = $sueldo </p>"; ?>
     <?php echo "<p>Se te paga el año = $Pporaño </p>"; ?>
    </body>
</html>
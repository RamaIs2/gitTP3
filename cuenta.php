<?php
$sueldo = $_GET['sueldo']
$horas  = $_GET['horas']

$Pporhora = $sueldo/$horas
?>
<!DOCTYPE html>
<html>
<head>
    <title>TP3</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Paga por hora </h1>
<?php> echo "<p>Se te paga la hora = $Pporhora </p>"; ?>
</body>
</html>
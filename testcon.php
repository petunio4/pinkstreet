<?php
$conexion = mysql_connect ("localhost", "cambioc", "climacambio");
mysql_select_db ("dbmuseo", $conexion);

$queEmp = "SELECT * FROM editorial";
$resEmp = mysql_query ($queEmp, $conexion) or die (mysql_error ());
$totEmp = mysql_num_rows ($resEmp);

echo "---->" . $totEmp;
?>

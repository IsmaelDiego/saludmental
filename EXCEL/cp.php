<?php
require('conn.php');
$tipo       = $_FILES['fileRegistrador']['type'];
$tamanio    = $_FILES['fileRegistrador']['size'];
$archivotmp = $_FILES['fileRegistrador']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(",", $linea);

        $Codigo_Item                 = !empty($datos[0])  ? ($datos[0]) : '';
        $Descripcion_Item           = !empty($datos[1])  ? ($datos[1]) : '';
        

            $insertarData = "INSERT INTO 	cpms( 
                Codigo_Item,
                Descripcion_Item
                
            ) VALUES(
                '$Codigo_Item',
                '$Descripcion_Item'
                
            )";
            mysqli_query($con, $insertarData);
    }

    $i++;
}
echo '<p style="text-aling:center; color:#333;">Total de Registros: ' . $cantidad_regist_agregados . '</p>';
?>

<a href="index.php">Atras</a>
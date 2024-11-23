<?php
require('conn.php');
require '../vendor/autoload.php'; // Incluye PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

$tipo       = $_FILES['filePaciente']['type'];
$tamanio    = $_FILES['filePaciente']['size'];
$archivotmp = $_FILES['filePaciente']['tmp_name'];

try {
    // Cargar el archivo Excel
    $spreadsheet = IOFactory::load($archivotmp);
    $worksheet = $spreadsheet->getActiveSheet();

    $i = 0; // Contador de filas procesadas
    $cantidad_registros = $worksheet->getHighestRow(); // Total de filas en el archivo

    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
    
        $datos = [];
        foreach ($cellIterator as $cell) {
            $datos[] = $cell->getValue(); // Obtener el valor de cada celda
        }
    
        // Ignorar la primera fila (asumiendo que son los encabezados)
        if ($i != 0) {
            $Codigo_Item = !empty($datos[0]) ? mysqli_real_escape_string($con, $datos[0]) : '';
            $Descripcion_Item = !empty($datos[1]) ? mysqli_real_escape_string($con, $datos[1]) : '';
    
            // Insertar los datos en la tabla
            $insertarData = "INSERT INTO cpms (
                Codigo_Item,
                Descripcion_Item
            ) VALUES (
                '$Codigo_Item',
                '$Descripcion_Item'
            )";
    
            // Ejecutar la consulta y verificar errores
            if (!mysqli_query($con, $insertarData)) {
                echo 'Error en la consulta: ' . mysqli_error($con);
            }
        }
    
        $i++;
    }
    

    // Mostrar el total de registros procesados (restando 1 por el encabezado)
    $cantidad_regist_agregados = $cantidad_registros - 1;
    echo '<p style="text-align:center; color:#333;">Total de Registros: ' . $cantidad_regist_agregados . '</p>';
} catch (Exception $e) {
    echo 'Error al procesar el archivo: ', $e->getMessage();
}
?>

<a href="index.php">Atrás</a>

<?php
require('conn.php');
require '../vendor/autoload.php'; // Incluye PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_FILES['filePaciente']['tmp_name'])) {
    $archivotmp = $_FILES['filePaciente']['tmp_name'];

    // Cargar archivo Excel
    $spreadsheet = IOFactory::load($archivotmp);
    $sheet = $spreadsheet->getActiveSheet();
    $rows = $sheet->toArray();

    // Inicializar contadores
    $registrosProcesados = 0;
    $registrosFallidos = 0;

    // Verificar que el archivo contiene datos
    if (count($rows) > 1) {
        echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
        echo "<thead>
                <tr>
                    <th>Id_Paciente</th>
                    <th>Id_Tipo_Documento</th>
                    <th>Numero_Documento</th>
                    <th>Apellido_Paterno_Paciente</th>
                    <th>Apellido_Materno_Paciente</th>
                    <th>Nombres_Paciente</th>
                    <th>Fecha_Nacimiento</th>
                    <th>Genero</th>
                    <th>Id_Etnia</th>
                    <th>Historia_Clinica</th>
                    <th>Ficha_Familiar</th>
                    <th>Ubigeo_Nacimiento</th>
                    <th>Ubigeo_Reniec</th>
                    <th>Domicilio_Reniec</th>
                    <th>Ubigeo_Declarado</th>
                    <th>Domicilio_Declarado</th>
                    <th>Referencia_Domicilio</th>
                    <th>Id_Pais</th>
                    <th>Id_Establecimiento</th>
                    <th>Fecha_Alta</th>
                    <th>Fecha_Modificacion</th>
                </tr>
              </thead>";
        echo "<tbody>";

        // Iterar sobre las filas del archivo Excel
        foreach ($rows as $index => $row) {
            if ($index == 0 || empty(array_filter($row))) continue; // Ignorar encabezados o filas vacías

            // Extraer datos y limpiar
            $Id_Paciente              = !empty($row[0])  ? trim($row[0]) : '';
            $Id_Tipo_Documento        = !empty($row[1])  ? trim($row[1]) : '';
            $Numero_Documento         = !empty($row[2])  ? trim($row[2]) : '';
            $Apellido_Paterno_Paciente = !empty($row[3])  ? trim($row[3]) : '';
            $Apellido_Materno_Paciente = !empty($row[4])  ? trim($row[4]) : '';
            $Nombres_Paciente         = !empty($row[5])  ? trim($row[5]) : '';
            $Fecha_Nacimiento         = !empty($row[6])  ? trim($row[6]) : '';
            $Genero                   = !empty($row[7])  ? trim($row[7]) : '';
            $Id_Etnia                 = !empty($row[8])  ? trim($row[8]) : '';
            $Historia_Clinica         = !empty($row[9])  ? trim($row[9]) : '';
            $Ficha_Familiar           = !empty($row[10]) ? trim($row[10]) : '';
            $Ubigeo_Nacimiento        = !empty($row[11]) ? trim($row[11]) : '';
            $Ubigeo_Reniec            = !empty($row[12]) ? trim($row[12]) : '';
            $Domicilio_Reniec         = !empty($row[13]) ? trim($row[13]) : '';
            $Ubigeo_Declarado         = !empty($row[14]) ? trim($row[14]) : '';
            $Domicilio_Declarado      = !empty($row[15]) ? trim($row[15]) : '';
            $Referencia_Domicilio     = !empty($row[16]) ? trim($row[16]) : '';
            $Id_Pais                  = !empty($row[17]) ? trim($row[17]) : '';
            $Id_Establecimiento       = !empty($row[18]) ? trim($row[18]) : '';
            $Fecha_Alta               = !empty($row[19]) ? trim($row[19]) : '';
            $Fecha_Modificacion       = !empty($row[20]) ? trim($row[20]) : '';

            // Insertar en la base de datos
            $insertarData = "INSERT INTO paciente (
                Id_Paciente, Id_Tipo_Documento, Numero_Documento, 
                Apellido_Paterno_Paciente, Apellido_Materno_Paciente, Nombres_Paciente, 
                Fecha_Nacimiento, Genero, Id_Etnia, Historia_Clinica, Ficha_Familiar, 
                Ubigeo_Nacimiento, Ubigeo_Reniec, Domicilio_Reniec, Ubigeo_Declarado, 
                Domicilio_Declarado, Referencia_Domicilio, Id_Pais, Id_Establecimiento, 
                Fecha_Alta, Fecha_Modificacion
            ) VALUES (
                '$Id_Paciente', '$Id_Tipo_Documento', '$Numero_Documento', 
                '$Apellido_Paterno_Paciente', '$Apellido_Materno_Paciente', '$Nombres_Paciente', 
                '$Fecha_Nacimiento', '$Genero', '$Id_Etnia', '$Historia_Clinica', '$Ficha_Familiar', 
                '$Ubigeo_Nacimiento', '$Ubigeo_Reniec', '$Domicilio_Reniec', '$Ubigeo_Declarado', 
                '$Domicilio_Declarado', '$Referencia_Domicilio', '$Id_Pais', '$Id_Establecimiento', 
                '$Fecha_Alta', '$Fecha_Modificacion'
            )";

            if (mysqli_query($con, $insertarData)) {
                $registrosProcesados++;
            } else {
                $registrosFallidos++;
                file_put_contents('error_log.txt', mysqli_error($con) . "\n", FILE_APPEND);
            }

            // Mostrar datos en tabla HTML
            echo "<tr>";
            foreach ($row as $dato) {
                echo "<td>" . htmlspecialchars(trim($dato)) . "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "Total registros en el Excel: " . count($rows) . "<br>";
        echo "Total registros procesados: " . $registrosProcesados . "<br>";
        echo "Total registros fallidos: " . $registrosFallidos . "<br>";
    } else {
        echo "El archivo no contiene datos.";
    }
}

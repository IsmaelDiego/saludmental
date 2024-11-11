<?php
session_start();
if (!isset($_SESSION['S_IDUSUARIO'])) { //si existe
    header('Location: ../index.php');
}

?>
  <?php include_once "../layouts/header.php" ?>
  <title>Admin - Dashboard</title>
     
  <?php include_once "../layouts/nav.php" ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Datatables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Datatables</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ficha <b>NOMINAL</b></h4>
                                    <p class="card-subtitle mb-4">
                                        Se mostrará los datos de los pacientes 
                                    </p>

                                    <table id="selection-datatable" class="table dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID Cita</th>
                                                <th>Año</th>
                                                <th>Mes</th>
                                                <th>Dia</th>
                                                <th>Fecha de Atención</th>
                                                <th>Lote</th>
                                                <th>N° Región</th>
                                                <th>ID UPS</th>
                                                <th>ID Establecimiento</th>
                                                <th>ID Paciente</th>
                                                <th>ID Personal</th>
                                                <th>ID Registrador</th>
                                                <th>ID Financiador</th>
                                                <th>ID Condición de Establecimiento</th>
                                                <th>ID Condición de Servicio</th>
                                                <th>Edad REG</th>
                                                <th>Tipo Edad</th>
                                                <th>Año Actual del Paciente</th>
                                                <th>Mes Actual del Paciente</th>
                                                <th>Dia Actual del Paciente</th>
                                                <th>ID Turno</th>
                                                <th>Codigo Item</th>
                                                <th>Tipo de Diagnostico</th>
                                                <th>Valor Lab</th>
                                                <th>ID Correlativo</th>
                                                <th>Peso</th>
                                                <th>Talla</th>
                                                <th>Hemoglobina</th>
                                                <th>Perimetro Abdominal</th>
                                                <th>Perimetro Cefalico</th>
                                                <th>ID otra Condición</th>
                                                <th>Fecha Ultima Regla</th>
                                                <th>Fecha Solicitud HB</th>
                                                <th>Fecha Registro</th>
                                                <th>ID Pais</th>
                                                <th>Grupo Riesgo DESC</th>
                                                <th>Condicion Gestante</th>
                                                <th>Peso Pregestacional</th>
                                                <th>ID Dosis</th>
                                                <th>Renipress</th>
                                                <th>ID Institución Educativa</th>
                                                <th>ID Aplicación de Origen</th>
                                                <th>Alerta</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->



 

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php
    include_once "../layouts/footer.php";
?>
  
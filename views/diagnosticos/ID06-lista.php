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
                        <h4 class="mb-0 font-size-18"><b>ID01_TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR</b></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a></li>
                                <li class="breadcrumb-item active">ID01</li>
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
                            <h4 class="card-title"><b>DIAGNOSTICO ID01</b></h4>
                            <p class="card-subtitle mb-4">
                                <div class="row">
                                <div class="col-lg-6">
                                <P><b>Fuente:</b></P>
                                <P><b>Mes:</b></P>
                                </div>
                                <div class="col-lg-6">
                                <P><b>Corte B.D:</b></P>
                                <P><b>Periodo:</b></P>
                                </div>
                                </div>
                                <div class="col-md-12 mb-3">
                    <form method="post" action="" class="form-inline">
                        <label for="fechaInicio" class="mr-2">Fecha de Inicio:</label>
                        <input type="date" name="fechaInicio" class="form-control mr-2" value="">

                        <label for="fechaFin" class="mr-2">Fecha de Fin:</label>
                        <input type="date" name="fechaFin" class="form-control mr-2" value="">

                        <button type="submit" name="filtrarFechas" class="btn btn-primary">Filtrar por Fechas</button>
                    </form>
                </div>
                            </p>

                            <table id="key-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Datos del Paciente General</th>
                                        <th>Consulta Medica</th>
                                        <th>Psicoeducación</th>
                                        <th>Intervenciones individuales</th>
                                        <th>Psicoterapia individuales</th>
                                        <th>Intervenciones Familiares</th>
                                        <th>Visita Domiciliaria</th>
                                        <th>Movilización Social</th>
                                        <th>DEN</th>
                                        <th>NUM</th>
                                        <th>Avance de Actividades</th>
                                        <th>Cumplimiento General</th>
                                        <th>Cumplimiento</th>
                                        <th>Avance (%)</th>
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
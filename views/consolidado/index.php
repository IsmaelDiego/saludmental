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

            <!-- IMPORTS-->
            <div class="row">
            <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Importar Ficha <b>PACIENTE</b></h4>
                            <p class="card-subtitle mb-4">Subir Excel </p>

                            <input type="file" class="dropify" data-height="100" />

                        </div> <!-- end card-body-->
                        <div class="col-12 m-2">
                            <button type="submit" class="btn btn-primary btn-block" onclick="Inciar_Sesion()">Subir</button>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">

                        <h4 class="card-title">Importar Ficha <b>PERSONAL</b></h4>
                        <p class="card-subtitle mb-4">Subir Excel </p>

                            <input type="file" class="dropify" data-height="100" />

                        </div> <!-- end card-body-->
                        <div class="col-12 m-2">
                            <button type="submit" class="btn btn-primary btn-block" onclick="Inciar_Sesion()">Subir</button>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">

                        <h4 class="card-title">Importar Ficha <b>REGISTRADOR</b></h4>
                        <p class="card-subtitle mb-4">Subir Excel </p>

                            <input type="file" class="dropify" data-height="100" />

                        </div> <!-- end card-body-->
                        <div class="col-12 m-2">
                            <button type="submit" class="btn btn-primary btn-block" onclick="Inciar_Sesion()">Subir</button>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">

                        <h4 class="card-title">Importar Ficha <b>NOMINAL</b></h4>
                        <p class="card-subtitle mb-4">Subir Excel </p>

                            <input type="file" class="dropify" data-height="100"  />

                        </div> <!-- end card-body-->
                        <div class="col-12 m-2">
                            <button type="submit" class="btn btn-primary btn-block" onclick="Inciar_Sesion()">Subir</button>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->


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
                                        <th>N° Pag</th>
                                        <th>N° Región</th>
                                        <th>ID UPS</th>
                                        <th>Descripción UPS</th>
                                        <th>Descripción Sector</th>
                                        <th>Descripción Disa</th>
                                        <th>Descripción Red</th>
                                        <th>Descripción MicroRed</th>
                                        <th>Codigo Unico</th>
                                        <th>Nombre Establecimiento</th>
                                        <th>Abrev Tipo de Documento Paciente</th>
                                        <th>N° de Documento Paciente</th>
                                        <th>Apellido Paterno Paciente</th>
                                        <th>Apellido Materno Paciente</th>
                                        <th>Nombres Paciente</th>
                                        <th>Fecha de Nacimiento Paciente</th>
                                        <th>Genero</th>
                                        <th>ID Etnia</th>
                                        <th>Historia Clinica</th>
                                        <th>Ficha Familiar</th>
                                        <th>ID Financiador</th>
                                        <th>Descripción Financiador</th>
                                        <th>Descripción Pais</th>
                                        <th>Abrev Tipo de Documento Personal</th>
                                        <th>N° de Documento Personal</th>
                                        <th>Apellido Paterno Personal</th>
                                        <th>Apellido Materno Personal</th>
                                        <th>Nombres Personal</th>
                                        <th>Fecha de Nacimiento Personal</th>
                                        <th>ID Condicion</th>
                                        <th>Descripcion Condicion</th>
                                        <th>ID Profesion</th>
                                        <th>Descripcion Profesion</th>
                                        <th>ID Colegio</th>
                                        <th>Descripcion Colegio</th>
                                        <th>N° de Colegiatura</th>
                                        <th>Abrev Tipo de Documento Registrador</th>
                                        <th>N° de Documento Registrador</th>
                                        <th>Apellido Paterno Registrador</th>
                                        <th>Apellido Materno Registrador</th>
                                        <th>Nombres Registrador</th>
                                        <th>Fecha de Nacimiento Registrador</th>
                                        <th>ID Condicion Establecimiento</th>
                                        <th>ID Condicion Servicio</th>
                                        <th>Edad Reg</th>
                                        <th>Año Acutal Paciente</th>
                                        <th>Mes Acutal Paciente</th>
                                        <th>Dia Acutal Paciente</th>
                                        <th>ID Turno</th>
                                        <th>Codigo Item</th>
                                        <th>Descripcion Item</th>
                                        <th>Tipo de Diagnostico</th>
                                        <th>valor Lab</th>
                                        <th>ID Correlativo</th>
                                        <th>Peso</th>
                                        <th>Talla</th>
                                        <th>Hemoglobina</th>
                                        <th>Talla</th>
                                        <th>Talla</th>
                                        <th>Talla</th>
                                        <th>Talla</th>
                                        <th>Talla</th>
                                        <th>Tipo de Diagnostico</th>
                                        <th>Perimetro Abdominal</th>
                                        <th>Perimetro Cefalico</th>
                                        <th>ID otra Condición</th>
                                        <th>Fecha Ultima Regla</th>
                                        <th>Fecha Solicitud HB</th>
                                        <th>Fecha Registro</th>
                                        <th>Fecha Modificación</th>
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
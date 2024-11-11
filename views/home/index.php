<?php
session_start();
if (!isset($_SESSION['S_IDUSUARIO'])) { //si existe
    header('Location: ../../index.php');
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
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Mentalis</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <span class="badge badge-soft-primary float-right">Registrados</span>
                                <h5 class="card-title mb-0">TOTAL DE PACIENTES</h5>
                            </div>
                            <div class="row d-flex align-items-center mb-4">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        10,895
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="text-muted"> <i
                                            class="mdi mdi-arrow-up text-success"></i></span>
                                </div>
                            </div>

                        </div>
                        <!--end card body-->
                    </div><!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <span class="badge badge-soft-primary float-right">En seguimiento</span>
                                <h5 class="card-title mb-0">TOTAL DE DIAGNOSTICOS</h5>
                            </div>
                            <div class="row d-flex align-items-center mb-4">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        10
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="text-muted"><i
                                            class="mdi mdi-arrow-up text-success"></i></span>
                                </div>
                            </div>


                        </div>
                        <!--end card body-->
                    </div><!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->


            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-lg-3">

                                    <h4 class="card-title">Pacientes con Actividades en <b class="text-success">100%</b></h4>

                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="135" data-height="135"
                                            data-linecap=round data-fgColor="#00C2B2" value="95"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15" />
                                        <h5 class="text-muted mt-3">Total de pacientes</h5>


                                        <p class="text-muted w-75 mx-auto sp-line-2">Conteo general de pacientes en estado <b class="text-success"><b>SATISFACTORIO</b></b></p>


                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <h4 class="card-title">Pacientes con Actividades en <b class="text-warning"> + 50%</b></h4>

                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="135" data-height="135"
                                            data-linecap=round data-fgColor="#FCBA03" value="95"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15" />
                                        <h5 class="text-muted mt-3">Total de pacientes</h5>


                                        <p class="text-muted w-75 mx-auto sp-line-2">Conteo general de pacientes en estado de <b class="text-warning"><b>PELIGRO</b></b></p>


                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <h4 class="card-title">Pacientes con Actividades en <b class="text-danger"> - 50%</b></h4>

                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="135" data-height="135"
                                            data-linecap=round data-fgColor="#BF2506" value="35"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15" />
                                        <h5 class="text-muted mt-3">Total de pacientes</h5>


                                        <p class="text-muted w-75 mx-auto sp-line-2">Conteo general de pacientes en estado de <b class="text-danger"><b>ALERTA</b></b></p>


                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <h4 class="card-title">Estado de Pacientes</h4>
                                    <p class="card-subtitle mb-4 font-size-13">Leyenda
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Estado de paciente </th>
                                                    <th>(%)</th>
                                                    <th>Color</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>
                                                        SATISFACTORIO
                                                    </td>
                                                    <td>
                                                        100%
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        PELIGRO
                                                    </td>
                                                    <td>
                                                        + 50% a - 100%
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td>
                                                        ALERTA
                                                    </td>
                                                    <td>
                                                        - 50% a 0%
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->


            </div>
            <!--end row-->


            <div class="row">

                <!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"><b>Top 10 DIAGNOSTICOS</b></h4>
                            <p class="card-subtitle mb-4 font-size-13">Periodo Actual
                            </p>

                            <div class="table-responsive">
                                <table class="table table-centered table-striped table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Disganostico</th>
                                            <th>Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                ID01
                                            </td>
                                            <td>
                                                TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                ID01
                                            </td>
                                            <td>
                                                TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ID01
                                            </td>
                                            <td>
                                                TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ID01
                                            </td>
                                            <td>
                                                TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ID01
                                            </td>
                                            <td>
                                                TRATAMIENTO ESPECIALIZADO EN VIOLENCIA FAMILIAR
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!--end card body-->

                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"><b>Estado de pacientes</b></h4>
                            <p class="card-subtitle mb-4 font-size-13">Periodo Actual
                            </p>

                            <div class="table-responsive">
                                <table class="table table-centered table-striped table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                            <th>Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            ISMAEL DIEGO QUISPE MENDOZA
                                            </td>
                                            <td>
                                            PELIGRO
                                            </td>
                                            <td>
                                                <a href="#"><span class=' clave text-primary px-1' style='cursor:pointer;' title='Ver más'><i class='fas fa-eye'></i></span></a>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!--end card body-->

                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <!--end col-->


            </div>
            <!--end row-->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php
    include_once "../layouts/footer.php";
    ?>
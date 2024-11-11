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
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><b>AVANCE (%)</b></h4>
                            <p class="card-subtitle mb-4">
                           
                            </p>
                            <div class="col-md-12">
                                <table id="selection-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Establecimiento</th>
                                            <th>Denominador</th>
                                            <th>Numerador</th>
                                            <th>Avance (%)</th>
                                            <th>Año</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><b>CUMPLIMIENTO DE ACTIVIDADES</b></h4>
                            <p class="card-subtitle mb-4">
                           
                            </p>
                            <div class="col-md-12">
                                <table id="key-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Establecimiento</th>
                                            <th>4%</th>
                                            <th>8%</th>
                                            <th>12%</th>
                                            <th>16%</th>
                                            <th>20%</th>
                                            <th>24%</th>
                                            <th>28%</th>
                                            <th>32%</th>
                                            <th>36%</th>
                                            <th>40%</th>
                                            <th>44%</th>
                                            <th>48%</th>
                                            <th>52%</th>
                                            <th>56%</th>
                                            <th>60%</th>
                                            <th>64%</th>
                                            <th>68%</th>
                                            <th>72%</th>
                                            <th>76%</th>
                                            <th>80%</th>
                                            <th>84%</th>
                                            <th>88%</th>
                                            <th>92%</th>
                                            <th>96%</th>
                                            <th>100%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><b>AVANCE (%)</b></h4>
                            <p class="card-subtitle mb-4">
                           
                            </p>
                            <div class="col-md-12">
                                <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Establecimiento</th>
                                            <th>Consulta Mendica</th>
                                            <th>Evaluación Integral</th>
                                            <th>Psicoeducación</th>
                                            <th>Inter Individuales</th>
                                            <th>Psicote Inidivual</th>
                                            <th>Inter Familiares</th>
                                            <th>Visita Domiciliaria</th>
                                            <th>Movilización Social</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->


            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-xl-8">

                                    <h4 class="card-title"><b>Avance en (%)</b></h4>

                                    <div id="morris-bar-example" class="morris-cart"></div>
                                    <p class="text-center">CENTRO DE SALUD MENTAL COMUNITARIO BELLA ESMERALDA- HUANTA</p>
                                </div> <!-- end card-body-->

                                <div class="col-lg-4">
                                    <h4 class="card-title"><b>Avance% (25 Actvidades)</b></h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Fila 1</th>
                                                    <th>Fila 2</th>
                                                    <th>Fila 3</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        0%
                                                    </td>
                                                    <td>
                                                        4%
                                                    </td>
                                                    <td>
                                                        8%
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        12%
                                                    </td>
                                                    <td>
                                                        16%
                                                    </td>
                                                    <td>
                                                        20%
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        24%
                                                    </td>
                                                    <td>
                                                        28%
                                                    </td>
                                                    <td>
                                                        32%
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        36%
                                                    </td>
                                                    <td>
                                                        40%
                                                    </td>
                                                    <td>
                                                        44%
                                                    </td>
                                                </tr>

                                                <td>
                                                    48%
                                                </td>
                                                <td>
                                                    52%
                                                </td>
                                                <td>
                                                    56%
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        60%
                                                    </td>
                                                    <td>
                                                        64%
                                                    </td>
                                                    <td>
                                                        68%
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        72%
                                                    </td>
                                                    <td>
                                                        74%
                                                    </td>
                                                    <td>
                                                        76%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        80%
                                                    </td>
                                                    <td>
                                                        84%
                                                    </td>
                                                    <td>
                                                        88%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        92%
                                                    </td>
                                                    <td>
                                                        96%
                                                    </td>
                                                    <td>
                                                        100%
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-xl-8">

                                    <h4 class="card-title"><b>Avance en (%)</b></h4>

                                    <div id="morris-bar-example" class="morris-chart"></div>
                                    <p class="text-center">CENTRO DE SALUD MENTAL COMUNITARIO BELLA ESMERALDA- HUANTA</p>
                                </div> <!-- end card-body-->

                                <div class="col-lg-4">
                                    <h4 class="card-title"><b>Avance% (25 Actvidades)</b></h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Valores</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Consulta Medica
                                                    </td>
                                                </tr>
                                               <tr>
                                               <td>
                                                        Evaluación Integral
                                                    </td>
                                               </tr>
                                                   <tr>
                                                   <td>
                                                        Psicoeducación
                                                    </td>
                                                   </tr>
                                                    <tr>
                                                    <td>
                                                        Inter Individuales
                                                    </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <td>
                                                        Psicote Individual
                                                    </td>

                                                    </tr>
                                                   <tr>
                                                   <td>
                                                        Intervención Familiares
                                                    </td>
                                                   </tr>
                                                   <tr>
                                                   <td>
                                                        Visita Domiciliaria
                                                    </td>
                                                   </tr>
                                                   <tr> <td>
                                                        Movilización Social
                                                    </td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->





        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php
    include_once "../layouts/footer.php";
    ?>
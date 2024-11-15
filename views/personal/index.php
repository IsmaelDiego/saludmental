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
                                <h4 class="mb-0 font-size-18">FICHA PERSONAL</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">DASHBOARD</a></li>
                                        <li class="breadcrumb-item active">FICHA PERSONAL</li>
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
                                    <h4 class="card-title">Ficha <b>PERSONAL</b></h4>
                                    <p class="card-subtitle mb-4">
                                        Se mostrará los datos de los pacientes 
                                    </p>

                                    <table id="selection-datatable" class="table dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID Personal</th>
                                                <th>Tipo de Documento</th>
                                                <th>N° de Documento</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Nombres</th>
                                                <th>Fecha de Nacimiento</th>
                                                <th>Condición</th>
                                                <th>Profeción</th>
                                                <th>Colegio</th>
                                                <th>N° de Colegiatura</th>
                                                <th>Establecimiento</th>
                                                <th>Fecha de Alta</th>
                                                <th>Fecha de Baja</th>
                                            </tr>
                                        </thead>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    
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
  
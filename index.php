<?php
session_start();
if (isset($_SESSION['S_IDUSUARIO'])) { //si existe
    header('Location: views/home');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Salud Mental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="#" class="text-dark font-size-22 font-family-secondary">
                                                <img src="logo-Mentalis.png" alt="" width="50"><b> MENTALIS</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Bienvenido!</h1>
                                        <p class="text-muted mb-4">Ingrese sus credenciales para acceder.</p>
                                        <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuario" id="text_usuario">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="text_clave">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Recordar
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" onclick="Inciar_Sesion()">Acceder</button>
                    </div>

                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->



  <!-- jQuery -->
    <script src="plantilla/Admin/plugins/jquery/jquery.min.js"></script>

<!-- Custom JS -->
<script src="js/usuario.js?rev=<?php echo time(); ?>"></script>
<!-- Alert library -->
<script src="utilitarios/sweetalert.js"></script>

<script>
        $('#text_clave').keypress(function(e) {
            if (e.which == 13) {
                Inciar_Sesion();
            }
        });

        $('#text_usuario').trigger('focus');



        const rmcheck = document.getElementById('remember');
        usuarioinput = document.getElementById('text_usuario');
        passinput = document.getElementById('text_clave');

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmcheck.setAttribute("checked", "checked");
            usuarioinput.value = localStorage.usuario;
            passinput.value = localStorage.pass;
        } else {
            rmcheck.removeAttribute("checked");
            usuarioinput.value = "";
            passinput.value = "";
        }
    </script>

</body>

</html>
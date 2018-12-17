<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Page-->
        <title>Registro de Usuario</title>
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/registrar.css" rel="stylesheet">
    </head>
    <body>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Registro de Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form action="get_registrar.php" method="post" id="formRegistro">
                            <div class="form-row m-b-55">
                                <div class="name">Nombre</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="txtNombre" id="txtNombre">
                                                <label class="label--desc">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="txtApellido" id="txtApellido">
                                                <label class="label--desc">Apellido</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">RUT</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="txtRUT" id="txtRUT">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="txtEmail" id="txtEmail">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Contraseña</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="txtContrasena" id="txtContrasena">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Telefono</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="txtTelefono" id="txtTelefono">
                                    </div>
                                </div>
                            </div>
                            <!-- TEST-->
                            <div class="form-row">
                                <div class="name">Fecha de Nacimiento</div>
                                <div class="input-group date form_date col-md-5 fix_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" size="16" type="text" value="" name="txtfechaNacimiento" id="txtfechaNacimiento">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input2" value="" /><br/>
                            </div>
                            <!-- TEST-->
                            <div>
                                <button class="btn btn-success" type="submit">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--===============================================================================================-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <!-- Main JS-->
        <script src="js/global.js"></script>
        <!-- datetimepicker-->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script src="bootstrap/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
        <!--===============================================================================================-->
        <script src="js/jquery.validate.js"></script>
        <!--===============================================================================================-->
        <script src="js/registrar.js" charset="UTF-8"></script>
        </script>
        <!-- Main JS-->
    </html>
    <!-- end document-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Page-->
        <title>Agregar Registro</title>
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/registrar.css" rel="stylesheet">
    </head>
    <body>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Agregar Registro</h2>
                    </div>
                    <div class="card-body">
                        <form action="get_agregarHistoria.php" method="post" id="formAgregarHistoria">
                            <div class="form-row m-b-55">
                                <div class="name">Fisico</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="txtAltura" id="txtAltura">
                                                <label class="label--desc">Altura (en CM)</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="txtPeso" id="txtPeso">
                                                <label class="label--desc">Peso (en gramos)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-success" type="submit">Guardar</button>
                                <!--<button class="btn btn-warning" type="reset">Limpiar</button>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--===============================================================================================-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/jquery.validate.js"></script>
        <!--===============================================================================================-->
        <script src="js/agregarHistoria.js" charset="UTF-8"></script>
        </script>
        <!-- Main JS-->
    </html>
    <!-- end document-->
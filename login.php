<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/spaceitfip.css">
    <link rel="icon" href="img/Space_itfip_logotype.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SPACEITFIP | Iniciar sesi&oacute;n</title>
</head>

<body>
    <script src="js/animaciones.js"></script>
    <main class="form-signin w-100 m-auto">
        <?php if (isset($_GET['correo_vacio'])) { ?>
            <div class="alert alert-warning alert-flotante border-0">
                Ingrese el correo institucional *
            </div>
        <?php } ?>
        <?php if (isset($_GET['clave_vacia'])) { ?>
            <div class="alert alert-warning alert-flotante border-0">
                Ingrese la contrase&ntilde;a *
            </div>
        <?php } ?>
        <?php if (isset($_GET['politicas'])) { ?>
            <div class="alert alert-warning alert-flotante border-0">
                Seleccione el tratado de politicas de privacidad *
            </div>
        <?php } ?>
        <?php if (isset($_GET['correo_invalido'])) { ?>
            <div class="alert alert-warning alert-flotante border-0">
                El correo no es v&aacute;lido debe ser @itfip.edu.co *
            </div>
        <?php } ?>
        <?php if (isset($_GET['clave_invalida'])) { ?>
            <div class="alert alert-warning alert-flotante border-0">
                La contrase&ntilde;a debe tener m&iacute;nimo 8 caracteres *
            </div>
        <?php } ?>
        <?php if (isset($_GET['credenciales_incorrectas'])) { ?>
            <div class="alert alert-danger alert-flotante border-0">
                El correo ingresado o la contrase&ntilde;a son incorrectas *
            </div>
        <?php } ?>
        <?php if (isset($_GET['sesion_cerrada'])) { ?>
            <div class="alert alert-success alert-flotante border-0">
                Has cerrado sesi&oacute;n
            </div>
        <?php } ?>

        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">
            <div class="containertext-lg-start">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass w-100">
                            <div class="card-body px-4 py-5 px-md-5">
                                <form action="iniciar_sesion.php" id="Formulario_login" method="post">
                                    <div class="row">
                                        <div class="text-center">
                                            <img class="mb-4 ms-3" src="img/Space_itfip_logotype.png" alt="Logo SpaceItfip" width="72" height="72">
                                            <img class="mb-4 ms-3" src="img/logo1.png" alt="Logo SpaceItfip" width="78" height="78">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <diV class="text-center">
                                            <h2 class="fst-italic mb-4"><b>Iniciar sesiòn</b></h2>
                                        </diV>
                                    </div>
                                    <div class="row">
                                        <div class="text-center">
                                            <p><b>SPACEITFIP</b> S&oacute;ftware para pr&eacute;stamo y retiros de elementos y/o pr&eacute;stamo de espacios f&iacute;sicos del <b>ITFIP.</b></p>
                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-floating mb-4">
                                        <input name="correo" type="email" id="correo" class="form-control rounded-0" placeholder="Correo institucaional" />
                                        <label for="correo">Correo institucaional*@itfip.edu.co</label>
                                    </div>
                                    <div data-mdb-input-init class="form-floating mb-4">
                                        <input name="contraseña" type="password" id="contraseña" class="form-control rounded-0" placeholder="Constraseña*" />
                                        <label for="contraseña">Constraseña*</label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="1" id="politicas" />
                                        <label class="form-check-label" for="Politicas_privacidad">Acepto los términos y condiciones del Instituto Tolimense de Formación Técnica Profesional ITFIP de <a target="_blank" href="https://itfip.edu.co/politicas-de-tratamiento-de-los-datos-personales/?__im-VOPabZqn=13410309511891243395">tratamiento de datos.</a>
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 px-5 w-100">
                                            <b>Iniciar sesiòn</b>
                                        </button>
                                    </div>
                                    <a target="_blank" href="#">Olvidaste la Contraseña?</a>
                                    <div id="resultado"></div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-3 mb-3 text-muted">&copy; 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
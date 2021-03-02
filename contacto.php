<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.gif" type="image/gif">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <title>LuckyName</title>
</head>

<body>
<header>
    <div class="col d-flex justify-content-start fixed-top">
        <nav class="navbar navbar-light">
                <div class="container-fluid">
        <button class="nav-link navbar-toggler bg-white" id="navbarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
        </button>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="main.php" rel="noopener nofollow" target="_self">Home</a></li>
            <li><a class="dropdown-item" href="aboutus.php" rel="noopener nofollow" target="_self">About us</a></li>
            <li><a class="dropdown-item" href="contacto.php" rel="noopener nofollow" target="_self">Contacto</a></li>
          </ul>
                </div>
            </nav>
        </div>
        <div id="logo" class="logo d-flex justify-content-center" title="Logo"></div>
    </header>

    <main>
        <div class="container-fluid">
        <div id="contenido" class="row d-flex justify-content-center">
        <div id="contacto" class="col-md-5">
        <form id="contacto" class="my-3 p-3 rounded sombra h-100 needs-validation bg-white rounded" validate>
                <div class="col-md">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md">
                    <label for="validationCustom02" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md">
                    
                    <label for="validationCustomUsername" class="form-label">Correo electrónico</label>
                    <div class="input-group has-validation">
                        <div class="col-md-7">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control col-md-5 " id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Elige un usuario.
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <label for="validationCustom03" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Introduce un ciudad válida.
                    </div>
                </div>
            
                <div class="col-12">
                    <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Acepto los terminos y condiciones
                        </label>
                        <div class="invalid-feedback">
                            Aceptalos antes de enviar.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>

        </div>
    </main>
    <footer>
        <div id="oscuro" class="dot" title="Modo Dark Vader">
            <span id="icono" class="fa fa-moon fa-2x"></span>
        </div>
    </footer>
</body>

</html>

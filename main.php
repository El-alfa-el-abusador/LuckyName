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
    <header class="encabezado">
        <div id="logo" class="logo d-flex justify-content-center" title="Logo"></div>
    </header>

    <main>
        <div class="container-fluid">

            <div id="contenido" class="row d-flex justify-content-center">
                <div id="resultado" class="col-md-4">
                    <div id="resultados" class="my-3 p-3 bg-white rounded sombra alturas"></div>
                </div>
                <div id="selectores" class="col-md-4">
                    <div class="my-3 p-3 bg-white rounded sombra alturas">
                        <label for="longitud_nombre" class="form-label">Longitud del nombre</label>
                        <input type="range" class="form-range" min="0" max="5" id="longitud_nombre">
                        <label for="densidad_vocales" class="form-label">Densidad de vocales</label>
                        <input type="range" class="form-range" min="0" max="5" id="densidad_vocales" disabled>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning d-flex justify-content-end" type="submit">Generar</button>

                        </div>
                        <div class="row gx-10 my-3">
                            <div class="col-md-6 p-1">
                                <div id="ultimos" class="p-3 border bg-white rounded">
                                    <h6 class="border-bottom pb-2 mb-0">Últimos</h6>
                                    <div class="my-3">
                                        Bla Bla
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div id="premiados" class="p-3 border bg-white rounded">
                                    <h6 class="border-bottom pb-2 mb-0">Premiados</h6>
                                    <div class="my-3">
                                        Bla Bla
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </main>
    <footer>
        <div id="oscuro" class="dot" title="Modo Dark Vader">
            <span id="icono" class="fa fa-moon fa-2x"></span>
        </div>
    </footer>
</body>

</html>
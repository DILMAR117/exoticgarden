<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desarrolladores</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    @include('layout.navbar')
    <section class="service_section layout_padding ">
        <div class="container">
            <h1 class="custom_heading">EXOTIC GARDEN</h1>
            <div class=" layout_padding2">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Justificación</h5>
                            <p class="card-text">
                                La Página Web tendrá la función de informar a las personas sobre la diversidad de flores
                                que existen en nuestra
                                región, y así tambien daremos a conocer la información de cada jardinero.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Objetivo General</h5>
                            <p class="card-text">
                                Administrar una página informativa y recaudar toda la información de cada planta que se
                                encuentre en nuestra
                                región que hayan existido en un lapso de 200 años.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Objetivo Especifico</h5>
                            <p class="card-text">
                                Desarrollar un sistema de administración para la Jardinería "El Paso" durante el periodo
                                de Febrero-Marzo para
                                la administración de plantas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="custom_heading">Diagrama de la BD</h1>
                <img src="images/diagrama.png" alt="">
        </div>
    </section>
    @include('layout.footer')
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>

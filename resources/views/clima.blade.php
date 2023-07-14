<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clima</title>
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

<body onload="onLoad( )">
    @include('layout.navbar')
    <section class="service_section layout_padding ">

  <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="navbar">
            <img src="images/icon.png" witdh="30%" alt="...">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
            <div class="block">
            <h1 div class="information-container">
                CLIMA </h1>
            <div class="information-container">
                Localizacion:
                <div class="info" id="location"></div>
            </div>
            <div class="information-container">
                Descripción:
                <div class="info" id="description"></div>
            </div>
            <div class="information-container">
                Fecha:
                <div class="info" id="date"></div>
            </div>
        </div>
        <div class="block">
            <div class="information-container">
                Temperatura:
                <div class="info" id="temperature"></div>
            </div>
            <div class="information-container">
                Pressure:
                <div class="info" id="pressure"></div>
            </div>
            <div class="information-container">
                Humedad:
                <div class="info" id="humidity"></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div><br>

    </section>
    @include('layout.footer')
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @include('layout.navbar')
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider_item-box">
                        <div class="slider_item-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider_item-detail">
                                            <div>
                                                <h1>
                                                    !Bienvenidos a <br />
                                                    Exotic Garden¡
                                                </h1>
                                                <p>
                                                    Mantén tu amor hacia la naturaleza, porque es
                                                    la verdadera forma de entender el arte más y más..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="slider_img-box">
                                            <div>
                                                <img src="images/flor.png" alt="" class="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->

    <section class="service_section layout_padding ">
        <div class="container">
            <h2 class="custom_heading">- Flores mas Compradas -</h2>
            <p class="custom_heading-text">
                La tierra es donde todos nos encontramos, donde
                todos tenemos un interés mutuo, es lo único que compartimos.
            </p>
            <div class=" layout_padding2">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="images/margarita.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Margarita</h5>
                            <p class="card-text">
                                Comúnmente llamada margarita, es una planta herbácea de la
                                familia de las asteráceas muy utilizada a efectos decorativos
                                mezclada con el césped, por sus colores y su resistencia a la siega.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/lirio.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Azucena</h5>
                            <p class="card-text">
                                comúnmente llamadas azucenas o lirios, constituyen un género con alrededor
                                de 110 integrantes que se incluye dentro de la familia de las liliáceas.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/jacaranda.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Jacaranda</h5>
                            <p class="card-text">
                                Es un género de unas 50 especies aceptadas, de las 120 descritas,
                                de árboles y arbustos de la familia de las bignoniáceas, típicos
                                de la América intertropical y subtropical.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="custom_dark-btn">
                    Ver mas
                </a>
            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- fruits section -->
    <section class="fruit_section">
        <div class="container">
            <h2 class="custom_heading">- Mas Variedades -</h2>
            <p class="custom_heading-text">
                La belleza de una flor proviene de sus raíces.
            </p>
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>
                            Tulipan
                        </h3>
                        <p class="mt-4 mb-5">
                            Género de plantas perennes y bulbosas perteneciente a la familia
                            Liliaceae, en el que se incluyen los populares tulipanes,
                            nombre común con el que se designa a todas las especies, híbridos y cultivares de este
                            género.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="fruit_img-box d-flex justify-content-center align-items-center">
                        <img src="images/tulipanes.png" alt="" class="" width="250px" />
                    </div>
                </div>
            </div>
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>
                            Girasol
                        </h3>
                        <p class="mt-4 mb-5">
                            es uno de los tipos de flores más conocidas en todo el mundo.
                            Su popularidad se debe, sobre todo, a parecido con el sol y a
                            su capacidad de orientarse siguiendo el desplazamiento de este en
                            el cielo, de forma que recibe siempre toda la luz posible de él.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="fruit_img-box d-flex justify-content-center ">
                        <img src="images/girasol.png" alt="" class="" width="100px" />
                    </div>
                </div>
            </div>
            <div class="row layout_padding2-top layout_padding-bottom">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>
                            Clavel
                        </h3>
                        <p class="mt-4 mb-5">
                            El clavel de Indias es una planta anual de entre 30 y 50 cm que regala
                            hermosas flores hermafroditas de intensos colores cálidos
                            (naranja, rojo y amarillo) durante los meses más cálidos del año (julio y agosto
                            habitualmente).
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="fruit_img-box d-flex justify-content-center align-items-center">
                        <img src="images/clavel.png" alt="" class="" width="250px" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end fruits section -->

    <!-- tasty section -->
    <section class="tasty_section">
        <div class="container_fluid">
            <h2>
                ¿Nesecitas una flor?
            </h2>
        </div>
    </section>
    <!-- end tasty section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <h2 class="custom_heading">- Comentarios Relevantes -</h2>
            <p class="custom_heading-text">
                Los clientes y sus comentarios nos importan demasiado como un flor..
            </p>
            <div>
                <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="client_container layout_padding2">
                                <div class="client_img-box">
                                    <img src="images/client.png" alt="" />
                                </div>
                                <div class="client_detail">
                                    <h3>
                                        Johnhex
                                    </h3>
                                    <p class="custom_heading-text">
                                        Mis comentarios sobre la floreria exotic garden son positivas ya que la atencion
                                        es grandiosa y saben mucho del tema y te ayudan a encontrar una flor
                                        especial...<br />
                                        "Las flores de la primavera son los sueños del invierno,
                                        narrados en la mesa del desayuno de los ángeles".
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client_container layout_padding2">
                                <div class="client_img-box">
                                    <img src="images/client.png" alt="" />
                                </div>
                                <div class="client_detail">
                                    <h3>
                                        Maria
                                    </h3>
                                    <p class="custom_heading-text">
                                        Mis comentarios sobre la floreria exotic garden son positivas
                                        ya que la atencion es grandiosa y saben mucho del tema y
                                        te ayudan a encontrar una flor especial <br />
                                        "Una vida sin sueños es un jardín sin flores, pero una vida
                                        de sueños imposibles es un jardín de flores falsas".
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client_container layout_padding2">
                                <div class="client_img-box">
                                    <img src="images/client.png" alt="" />
                                </div>
                                <div class="client_detail">
                                    <h3>
                                        Mario
                                    </h3>
                                    <p class="custom_heading-text">
                                        There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in
                                        some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are <br />
                                        "Cuando a ti te quedan solo dos centavos en este mundo,
                                        compra una barra de pan con uno y un lirio con el otro".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom_carousel-control">
                        <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button"
                            data-slide="prev">
                            <span class="" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls-2" role="button"
                            data-slide="next">
                            <span class="" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.7813775214913!2d-92.65169448585459!3d16.737756725621946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed455fad7b1917%3A0x3bd486c7716e7773!2sFloreria%20San%20Ram%C3%B3n!5e0!3m2!1ses-419!2smx!4v1677736050381!5m2!1ses-419!2smx"
        width="1350" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- end client section -->

    @include('layout.footer')

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flores</title>
</head>
   @include('layout.navbar')
   <body id="page-top">
        <br/>
        <!-- flor Section-->
        <section class="page-section" id="">
            <div class="container">
                <!-- flor Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Flores</h2>
                <!-- Icon Divider-->
                @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>

                @endif


                   <!--Boton crear-->
                <div class="float-right{">
                        <a class="btn btn-primary btn-sm float-right" data-bs-toggle="modal"  data-bs-target="#florModal" data-bs-whatever="@mdo"  data-placement="right"><i class="fas fa-plus"></i>
                        {{ __('Crear Nuevo') }}
                        </a>

                </div>
                  <!--End Boton crear-->
                  <br/>
                <!-- Mostrar flormulario editar-->
                <div class="row justify-content-center">

                @yield('content')


                </div>
                <!-- end flormulario editar-->
                <!-- Mostrar flormulario registrar-->
                <div class="row justify-content-center">
                <div class="row justify-content-center">

                        <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="florModal" tabindex="-1" aria-labelledby="florModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Registrar Flor</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-plus"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                        <!-- Formulario Registrar -->
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <span class="card-title"></span>
                                            </div>
                                            <div class="card-body">
                                                        @includeif('partials.errors')
                                                        <form method="POST" action="{{ route('flor.store') }}"  role="form" enctype="multipart/form-data">
                                                            @csrf

                                                            @include('flor.crear')

                                                        </form>
                                                <!--Mostrar imagen-->
                                                <script>
                                                        function mostrarImagen() {
                                                        var archivo = document.getElementById("imagen").files[0];
                                                        if (archivo) {
                                                        var lector = new FileReader();
                                                        lector.onload = function(evento) {
                                                        document.getElementById("vista-previa").src = evento.target.result;
                                                        }
                                                        lector.readAsDataURL(archivo);
                                                        }
                                                        }

                                                        // Función para mostrar la imagen cuando se edita el formulario
                                                        function mostrarImagenEditada() {
                                                        // Obtener la URL de la imagen desde el servidor o desde el campo del formulario
                                                        var urlImagen = imagen(); // Esta función debe ser definida por ti

                                                        // Mostrar la imagen en la etiqueta <img>
                                                        if (urlImagen) {
                                                        document.getElementById("vista-previa").src = urlImagen;
                                                        }
                                                                                }

                                                        // Llamar la función mostrarImagenEditada() cuando se carga la página
                                                        window.onload = function() {
                                                            mostrarImagenEditada();
                                                        };
                                            </script>

                                            </div>
                                        </div>
                                        <!-- End Formulario editar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>



                </div>
                <!-- End flormulario registrar-->

            </div>
        </div>


                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        @include('layout.footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>


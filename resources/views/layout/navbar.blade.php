<!-- slider stylesheet -->

<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
 <!-- Font Awesome icons (free version)-->
 <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
      <a class="navbar-brand" href="/index">
        <img src="images/logo.png" alt="" /><span>
          ExoticGarden
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="/flor">Flores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/jardineros"> Jardineros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/clima "> Clima </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/identificar "> Identificación </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contactanos</a>
            </li>
          </ul>

        </div>
        <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
            <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Cerrrar sesión') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
      </div>
    </nav>
  </div>

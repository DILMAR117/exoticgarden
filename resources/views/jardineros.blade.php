<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardineros</title>
</head>

<body>
    @include('layout.navbar')

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="images/7.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jardineros a Domicilio o en Casas</h5>
              <p class="card-text">se encargan de mantener jardines en espacios pequeños como los de las casas de habitación.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="images/8.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jardineros de Empresas o Establecimientos</h5>
              <p class="card-text">se refiere a aquellos que laboran en áreas verdes más grandes, como las de las plazas públicas, los jardines de hoteles, el césped de los estadios de fútbol y hasta de los campos de golf.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div><br>
    <td colspan=3 alignament="center"><b>Registrar Trabajadores: </b></b><a href="{{ 'puestos' }}" class="btn btn-info"
            style="text-align:right">Ir a formulario</a></td>

    </div><br>
    </div>
    @include('layout.footer')
</body>

</html>

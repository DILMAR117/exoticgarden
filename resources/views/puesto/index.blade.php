@extends('layouts.app')

@section('template_title')
    Trabajadores
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajadores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('puestos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar nuevo trabajador') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Puesto</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($puestos as $puesto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $puesto->nombre }}</td>
											<td>{{ $puesto->apellido }}</td>
											<td>{{ $puesto->puesto }}</td>
											<td>{{ $puesto->telefono }}</td>

                                            <td>
                                                <form action="{{ route('puestos.destroy',$puesto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('puestos.show',$puesto->id) }}"><i class="fa fa-fw fa-eye"></i> Información</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('puestos.edit',$puesto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar Datos</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $puestos->links() !!}
            </div>
        </div></b></b>
    </div></b></b>
    <td colspan=3 alignament="center"><b>Más información: </b></b><a href="{{ 'jardineros' }}" class="btn btn-info"
        style="text-align:right">Volver</a></td>
@endsection

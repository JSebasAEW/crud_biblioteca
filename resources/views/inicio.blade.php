@extends("layout/plantilla")
@section("tituloPagina", "CRUD BIBLIOTECA")


@section("contenido")

    <div class="div">
        <div class="card text-center">
            <h5 class="card-header">
                BIBLIOTECA CRUD
            </h5>
            <div class="card-body">
                <div clss="row">
                    <div class="col-sm-12">
                        @if ($mensaje = Session::get("success") )
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                        @endif

                    </div>
                </div>
                <h5 class="card-title">Catalogo de libros</h5>
                <p class="card-text">Encuentra y disfruta de tu libro</p>
                <p>
                    <a href="{{ route('biblioteca.create') }}" class="btn btn-success">
                    <i class="fa-solid fa-book"></i> Agregar nuevo libro
                    </a>
                </p>
                <hr>

                <p class="card-text">
                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>Nombre</th>
                                <th>Autor</th>
                                <th>Categoria</th>
                                <th>F.Publicacion</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach ($datos as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->autor}}</td>
                                    <td>{{$item->categoria}}</td>
                                    <td>{{$item->f_publicacion}}</td>
                                    <td>
                                        <form action="{{ route('biblioteca.edit', $item->id)}}" method="GET">
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i> Actualizar
                                        </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('biblioteca.show', $item->id)}}" method="GET">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </button>
                                        </form>
                                    </td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </p>
            </div>
            <div class="card-footer text-muted">
                Juan Sebastian Alvarez - 202310070007
            </div>
        </div>

    </div>
@endsection



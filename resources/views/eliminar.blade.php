@extends("layout/plantilla")

@section("tituloPagina","Crear un nuevo registro")

@section("contenido")
<div class="card">
    <h5 class="card-header">Eliminar un libro</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Eliminar!</h4>
                <p>¡¡¡ Estas seguro de eliminar el libro !!!</p>
                <hr>
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>F.Publicacion</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$libros->nombre}}</td>
                            <td>{{$libros->autor}}</td>
                            <td>{{$libros->categoria}}</td>
                            <td>{{$libros->f_publicacion}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('biblioteca.destroy', $libros->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route('biblioteca.inicio') }}" class="btn btn-dark">
                        <i class="fa-solid fa-arrow-rotate-left"></i> Regresar
                    </a>
                    <button class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i> Eliminar
                    </button>
                </from>
                </div>
        </p>


    </div>
    
</div>
@endsection
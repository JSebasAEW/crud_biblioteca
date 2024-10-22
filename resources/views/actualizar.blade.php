@extends("layout/plantilla")

@section("tituloPagina","Crear un nuevo registro")

@section("contenido")
<div class="card">
    <h5 class="card-header">Actualizar datos del libro</h5>
    <div class="card-body">
        <p class="card-text">Introduce los datos respectivos del libro</p>
        
        <p class="card-text">
            <form action="{{ route('biblioteca.update', $libros->id) }}" method="POST">
                @csrf
                @method("PUT")

                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$libros->nombre}}">
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control" required value="{{$libros->autor}}">
                <label for="">Categoria</label>
                <input type="text" name="categoria" class="form-control" required value="{{$libros->categoria}}">
                <label for="">F.Publicacion</label>
                <input type="date" name="f_publicacion" class="form-control" required value="{{$libros->f_publicacion}}">
                <br>
                <a href="{{ route('biblioteca.inicio') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-rotate-left"></i> Regresar
                </a>
                <button class="btn btn-warning">
                <i class="fa-solid fa-floppy-disk"></i> Actualizar
                </button>
                

            </form>
        </p>
        
    </div>
</div>
@endsection
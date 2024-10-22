@extends("layout/plantilla")

@section("tituloPagina","Crear un nuevo registro")

@section("contenido")
<div class="card">
    <h5 class="card-header">Agregar nuevo libro</h5>
    <div class="card-body">
        <p class="card-text">Introduce los datos respectivos del libro</p>
        <p class="card-text">
            <form action="{{ route('biblioteca.store')}}" method="POST">
                @csrf
                
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control" required>
                <label for="">Categoria</label>
                <input type="text" name="categoria" class="form-control" required>
                <label for="">F.Publicacion</label>
                <input type="date" name="f_publicacion" class="form-control" required>
                <br>
                <a href="{{ route('biblioteca.inicio') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-rotate-left"></i> Regresar
                </a>
                <button class="btn btn-success">
                <i class="fa-solid fa-floppy-disk"></i> Agregar
                </button>
                

            </form>
        </p>
        
    </div>
</div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    
    public function index()
    {
        //Pagina de inicio
        $datos = Libros::all();
        return view("inicio", compact("datos"));
    }


    public function create()
    {
        //Formulario para agregar datos
        return view('agregar');
    }


    public function store(Request $request)
    {
        //Save datos en la BD
        $libros = new Libros();
        $libros->nombre = $request->post("nombre");
        $libros->autor = $request->post("autor");
        $libros->categoria = $request->post("categoria");
        $libros->f_publicacion = $request->post("f_publicacion");
        $libros->save();

        return redirect()->route("biblioteca.inicio")->with("success", "Agregado con exito");

    }


    public function show($id)
    {
        //Registro de la tabla
        $libros = Libros::find($id);
        return view("eliminar", compact("libros"));
    }

  
    public function edit($id)
    {
        //Traer los datos para editar colocarlos en un formulario
        
        $libros = Libros::find($id);
        return view("actualizar", compact("libros"));
    }

  
    public function update(Request $request, $id)
    {
        //Actualiza los datos en la BD
        $libros = Libros::find($id);
        $libros->nombre = $request->post("nombre");
        $libros->autor = $request->post("autor");
        $libros->categoria = $request->post("categoria");
        $libros->f_publicacion = $request->post("f_publicacion");
        $libros->save();
        return redirect()->route("biblioteca.inicio")->with("success", "Actualizado con exito");
    }


    public function destroy($id)
    {
        //Elimina un registro 
        $libros = Libros::find($id);
        $libros->delete();
        return redirect()->route("biblioteca.inicio")->with("success", "Eliminado con exito");

    }
}

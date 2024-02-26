<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    //

    public function index(){
        // Método que devuelve todos los registros en la tabla mapeada en el modelo Propiedad
        $propiedades = Propiedad::all(); 
        return view('home', compact('propiedades'));
       // return view('home', ['propiedades'->$propiedades]);
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoduenio');
        $nvaPropiedad->domicilio = $request->input('domicilio');
        $nvaPropiedad->save();

        return redirect('/');
    }

    public function editar($id){
        $propiedad = Propiedad::find($id);
        return view('editar', compact('propiedad'));        
    }

    public function update(Request $request, $id){
        $propiedad = Propiedad::find($id);
        $propiedad->color = $request->input('color');
        $propiedad->metros = $request->input('metros');
        $propiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $propiedad->costoxmtr = $request->input('costomtr');
        $propiedad->codigoDuenio = $request->input('codigoduenio');
        $propiedad->domicilio = $request->input('domicilio');
        $propiedad->save(); // actualiza porque ya existe

        return redirect('/');
    }

    public function eliminar($id){
        //$propiedad = Propiedad::where('color', $id); busca las propiedad cuyo color sea igual al valor que se le está pasando
        $propiedad = Propiedad::find($id);
        return view('eliminar', compact('propiedad'));
    }

    public function destroy($id){
        $propiedad = Propiedad::find($id);
        $propiedad->delete();

        return redirect('/');
    }
}

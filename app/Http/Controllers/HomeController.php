<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Foto;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = Auth::user();
        $usuario = $usuario->name;
        return view('home',compact("usuario"));
    }

    public function categoria($c)
    {
      $usuario = Auth::user();
      $usuario = $usuario->name;
        
        $Producto = Producto::all(); //buscamos el id a borrar
        switch($c) {
            case 'V':
                $categoria="Videojuegos";// 
                $ruta="videojuegos";
              break;
            case "I":
            $categoria="Informatica";
            $ruta="informatica";// 
              break;
            case "S":
            $categoria="Imagen y Sonido";
            $ruta="imagen";// 
              break;

            case "H":
                $categoria="Hogar";// 
                $ruta="hogar";
              break;
            case "T":
            $categoria="Telefonia";
            $ruta="telefonia";// 
              break;
 
          }
       
        return view($ruta, compact('Producto','categoria',"usuario")); //le paso a la ruta al id
      

        }
}

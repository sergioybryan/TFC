<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function categoria($c)
    {
        
        $Producto = Producto::all(); //buscamos el id a borrar
        switch($c) {
            case 'V':
                $categoria="Videojuegos";// 
        
              break;
            case "I":
            $categoria="Informatica";// 
              break;
            case "E":
            $categoria="Electronica";// 
              break;

            case "H":
                $categoria="Hogar";// 
              break;
            case "T":
            $categoria="Telefonia";// 
              break;
 
          }
       
        return view('telefonia',compact('Producto','categoria')); //le paso a la ruta al id
      

        }
}

<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use Auth;


class CartController extends Controller
{
    public function __construct(){

        // Si no existe la variable de session 'cart' la crea. 
        if (!\Session::has('cart')) \Session::put('cart',array());
        

    }
    
    //Mostrar carrito
    public function show(){
        
        $user = Auth::user();
        $user = $user->name;

        $cart = \Session::get('cart.'.$user); //obtengo la sesion producto.user

        //dd($cart);
        
        //return \Session::get('cart');
        return view('cart', compact('cart'));
      
    }
    
    //Añadir item
    public function add($producto){

        $user = Auth::user();
        $user = $user->name;
      //$cart = \Session::get('cart');
      $producto2=Producto::find($producto);
      $producto2->Cantidad= 1;
      
      if (isset ($producto2->foto->ruta_foto)){ //si el producto tiene una foto
        $producto2->foto_id=$producto2->foto->ruta_foto; //almaceno en la variable foto la ruta_foto
      }
    
      $cart= $producto2;
      \Session::push('cart.'.$user.".".$producto, $cart);

      //return view('cart', compact(''));

      return redirect()->route('cart-show');
    }

    //Borrar item
    public function delete($id){
        $user = Auth::user();
        $user = $user->name;
        
        Session::forget('cart.'.$user.".".$id); //borra el producto del carrito

        //return \Session::get('cart');
        
        return redirect()->route('cart-show');

    }

    //Mostrar item

    //


}

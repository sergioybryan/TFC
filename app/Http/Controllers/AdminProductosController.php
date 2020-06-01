<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Foto;


class AdminProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $Productos=Producto::all();
        return view('admin.productos.index2', compact('Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //Producto::create($request->all());

        $tabla=$request->all();
        if ($archivo=$request->file("foto_id")){

            $nombre= $archivo->getClientOriginalName();
            $archivo->move("images/images_product/",$nombre);
            $foto=Foto::create(["ruta_foto"=>$nombre]); //creo una ruta de la foto
            $tabla["foto_id"]=$foto->id; // creo un nuevo campo-> foto_id para almacenarlos en productos.
        }
        Producto::create($tabla);//creamos el nuevo producto
        /*$inicio = AdminProductosController::index();
        return $inicio;
    */
        return redirect('/admin/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Productos=Producto::all();
        return view('admin.productos.edit', compact('Productos','id'));//le pasamos el id
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $newP=Producto::find($id); //busco el id en la BD
        $newP->Nombre=$request->input('Nombre'); //sustituyo por los nuevos valores
        $newP->Categoria=$request->input('Categoria');
        $newP->Precio=$request->input('Precio');
        $newP->Descripcion=$request->input('Descripcion');
        $newP->Stock=$request->input('Stock');
        if ($archivo=$request->file("foto_id")){ //si hay foto

              //borro la foto antigua de la carpeta imagenes
            if( isset($newP->foto->ruta_foto) ){ //si existe la ruta

            if($nombre= $newP->foto->ruta_foto){ //si el producto tiene ruta de foto
                $image_path = public_path().'/images/images_product/'.$nombre;// public path, nos da la ruta de  public
                unlink($image_path);//elimino
            }
			else {
				//guardo una nueva imagen en la carpeta imagen
				$nombre= $archivo->getClientOriginalName(); //obtengo el nombre
				$archivo->move("images/images_product/",$nombre);//creo una nueva en la carpeta imagenes
				$foto=Foto::find($newP->foto_id); //busco el id de la foto para reemplazarlo
				$foto->ruta_foto=$nombre; //reemplazo la ruta_foto por la nueva ruta.
				$foto->save();// guardo
			}

            //guardo una nueva imagen en la carpeta imagen
            $nombre= $archivo->getClientOriginalName(); //obtengo el nombre
            $archivo->move("images/images_product/",$nombre);//creo una nueva en la carpeta imagenes
            $foto=Foto::find($newP->foto_id); //busco el id de la foto para reemplazarlo
            $foto->ruta_foto=$nombre; //reemplazo la ruta_foto por la nueva ruta.
            $foto->save();// guardo
        }

        else{

            $nombre= $archivo->getClientOriginalName();
            $archivo->move("images/images_product/",$nombre);
            $foto=Foto::create(["ruta_foto"=>$nombre]); //creo una ruta de la foto
            $newP->foto_id=$foto->id; // le doy al campo el valor de $foto->foto_id

        }
            

            

            
            
          
        }
    
        $newP->save(); //guardo

        return redirect('/admin/productos'); //envia a la pagina del admi

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDestroy($id,$nombre)
    {
        
        $producto=Producto::find($id);
        return view('admin.productos.destroy',compact('id','nombre','producto')); //le paso a la ruta la info
      

        }
    

    public function destroy($id)
    {
        
        $borrar = Producto::find($id); //buscamos el id a borrar
        if($nombre= $borrar->foto->ruta_foto){ //si el producto tiene ruta de foto
            $image_path = public_path().'/images/images_product/'.$nombre;// public path, nos da la ruta de  public
            unlink($image_path);

            $foto = Foto::find($borrar->foto_id);//obtengo el id de la foto para borrar la ruta
            $foto->delete();
        }

        $borrar->delete();// lo borramos

        // Tras esto redireccionamos
        //Session::flash('message', 'Exito al borrar');
        return redirect('/admin/productos'); //envia a la pagina del admi (usando la ruta)
      

        }
       
        public function categoria($c)
    {
        
        $lista = Producto::all(); //buscamos el id a borrar
       
        return view('admin.productos.categoria',compact('lista','c')); //le paso a la ruta al id
      

        }
    
}

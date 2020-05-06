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
        return view('admin.productos.index', compact('Productos'));
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
            echo $nombre;
            $archivo->move("images",$nombre);
            $foto=Foto::create(["ruta_foto"=>$nombre]);
            $tabla["foto_id"]=$foto->id;
        }
        Producto::create($tabla);
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
        $newP->save(); //guardo

        return redirect('/admin/productos'); //envia a la pagina del admi

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('admin.productos.index');
    }
}

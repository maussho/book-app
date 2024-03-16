<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Primero hacemos la referencia al modelo
use App\Models\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creamos un objeto $editorial y le damos todos los campos que tiene con all
        $editorials = Editorial::all();
        // retornamos la vista donde se va mostrar, y lo que va mostrar
        // en este caso el objeto de creamos
        return view('editorials.index', ['editorials' => $editorials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // retornamos una vista llamado create.blade.php y creamos la vista en view
        return view('editorials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // creammos un nuevo objeto utilizando eloquent ORM
        $editorial = new Editorial();
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->country = $request->country;
        // Almacenamos este nuevo registro en la base de datos
        $editorial->save();
        // luego de guardamos redireccionamos a la vista del index de editorial
        return redirect()->action([EditorialController::class, 'index']);

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
        // Primero retornnamos una vista pero como va ser para editar, necesitamos el id especifico para editar
        $editorial = Editorial::find($id);
        return view('editorials.edit', ['editorial' => $editorial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $editorial = Editorial::find($id);
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->country = $request->country;
        $editorial->save();
        return redirect()->action([EditorialController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

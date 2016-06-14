<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Correo;
use App\User;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $correoLeido = Correo::orderBy('created_at', 'DEC')
        ->where('leida', '=', true)->get();

        $correoSinLeer = Correo::orderBy('created_at', 'DEC')
        ->where('leida', '=', false)->get();

        return view('welcome')->with('correoLeido',$correoLeido)
        ->with("correoSinLeer", $correoSinLeer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('correo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $correo = new Correo($request->all());

        $user = \Auth::user();

        $correo->user()->associate($user);

        $correo->save();

        Flash::success("¡Se ha registrado la correspondencia de manera exitosa!");
        return redirect()->route('correo.index');
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
        //
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
    }

    public function cambiarEstado($id)
    {
        $correo = Correo::find($id);

        if ($correo->leida == true) {
            //dd("Marcar como no leida: ". $correo->leida);
            $correo->leida = false;
            $correo->save();
            Flash::success("¡Se ha actualizado la correspondencia de manera exitosa!");
            return redirect('/correo#test2');

        } else {
            //dd("Marcar como leida: ". $correo->leida);
            $correo->leida = true;
            $correo->save();
            Flash::success("¡Se ha actualizado la correspondencia de manera exitosa!");
            return redirect('/correo#test1');
        }

    }

    public function todasLeidas($id)
    {

        //$correoTable = (new Correo())->getTable();

        \DB::table('emails')->where('leida', '=', false)->update(array('leida' => true));

        Flash::success("¡Se ha actualizado la correspondencia de manera exitosa!");

        return redirect()->route('correo.index');
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

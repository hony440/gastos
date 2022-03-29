<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Tipo;
use App\Categoria;
use App\reg_movimientos;
use DB;


class Reg_movimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

        if(isset($data['desde'])){
            $desde=$data['desde'];
            $hasta=$data['hasta'];
        }

        //
        $reg_movimientos=DB::select("
            SELECT * FROM reg_movimientos m 
            JOIN users u ON m.usu_id=u.usu_id
            JOIN tipo t ON m.tip_id=t.tip_id
            JOIN categoria c ON m.cat_id=c.cat_id
            WHERE m.mov_fecha BETWEEN '$desde' AND '$hasta'

            ");
        return view('reg_movimientos.index')
        ->with('reg_movimientos',$reg_movimientos)
        ->with('desde',$desde)
        ->with('hasta',$hasta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo=Tipo::all();
        $categoria=Categoria::all();
        return view('reg_movimientos.create')
        ->with('tipo',$tipo)
        ->with('categoria',$categoria);
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $data['usu_id']=Auth::user()->usu_id;
        reg_movimientos::create($data);
        return redirect(route('reg_movimientos'));
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
         $reg_movimientos=reg_movimientos::find($id);
         $categoria=Categoria::all();
         $usuarios=user::all();
         $tipo=Tipo::all();
        return view('reg_movimientos.edit')
        ->with('categoria',$categoria)
        ->with('user',$usuarios)
        ->with('tipo',$tipo)
        ->with('reg_movimientos',$reg_movimientos)
        ;
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
        $Mov=reg_movimientos::find($id);
        $Mov->update($request->all());
        return redirect(route('reg_movimientos'));  
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
         reg_movimientos::destroy($id);
        return redirect(route('reg_movimientos'));
    }

}

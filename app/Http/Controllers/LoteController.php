<?php

namespace App\Http\Controllers;

use App\Models\ModelLote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lote = ModelLote::all()->sortByDesc('data_recebimento');
        return view('lote_index',compact('lote'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lote_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadLote=ModelLote::create([
            'lote'=>$request->lote,
            'fabricante'=>$request->fabricante,
            'validade'=>$request->validade,
            'nfe'=>$request->nfe,
            'data_recebimento'=>$request->data_recebimento,
        ]);
        if($cadLote){
            return redirect('lotes');
        }
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
        $lote=ModelLote::find($id);
        return view('lote_create',compact('lote'));
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
        ModelLote::where(['id'=>$id])->update([
            'lote'=>$request->lote,
            'fabricante'=>$request->fabricante,
            'validade'=>$request->validade,
            'nfe'=>$request->nfe,
            'data_recebimento'=>$request->data_recebimento,
        ]);
        return redirect('lotes');
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

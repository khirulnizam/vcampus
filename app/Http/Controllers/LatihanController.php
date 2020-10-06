<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latihan;
use App\Penceramah;

class LatihanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //search/browse record
        //$latihans=Latihan::all();
        if ($request->get('keyword')==null){
            $latihans=Latihan::paginate(5);
        }else{
            //dengan carian
            $keyword=$request->get('keyword');
            $latihans=Latihan::where('namalatihan', 
                'LIKE','%'.$keyword.'%')->paginate(5);
        }
        return view ('latihan.index')->with (compact('latihans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //call create.blade.php
        //folder resources/views/latihan
        //senaraikan semua penceramah
        $penceramahs = Penceramah::all();
        return view('latihan.create')->with(compact('penceramahs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //fetch record & store to db
        //sql
        //define object model
        $latihan=new Latihan();
        $latihan->kod=$request->get('kod');
        $latihan->namalatihan=$request->get('namalatihan');
        $latihan->deskripsi=$request->get('deskripsi');
        $latihan->save();//save ke db
        //return to index
        return redirect('/latihan/create')->with('success',
        'Rekod berjaya disimpan');
    }//end store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //paparan semula rekod
        $latihan = Latihan::find($id);

        

        return view ('latihan.show')->with(compact('latihan'));



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
        //paparan semula rekod
        $penceramahs = Penceramah::all();
        $latihan = Latihan::find($id);
        
        return view ('latihan.edit')
        ->with(compact('latihan'))
        ->with(compact('penceramahs'));
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
        //simpan kemaskini
        $latihan =Latihan::find($id);
        $latihan->update($request->only(
            'kod', 'namalatihan','deskripsi'
        ));
        return redirect('/latihan')->with('success',
            'Kemaskini berjaya di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //padam rekod
        $latihan=Latihan::find($id);
        $latihan->delete();
        return redirect('/latihan');
    }
}

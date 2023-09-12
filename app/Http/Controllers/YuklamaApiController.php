<?php

namespace App\Http\Controllers;

use App\Models\FirstTable;
use App\Models\ThirdTable;
use Illuminate\Http\Request;

class YuklamaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function firstinsert(Request $request)
    {
        
        $data=$request->validate([
            'faculty'=>'required|min:5',
            'yunalish'=>'required',
            'kurs'=>['required'],
            'talim_tili'=>['required'],
            'talaba_soni'=>'required',
            'guruh_soni'=>'required',
            'patok_soni'=>'required'
            
        ]);
        return FirstTable::create($data);

    }
    public function thirdinsert(Request $request)
    {
        $data=$request->validate([
            'faculty'=>'required|min:5',
            'yunalish'=>'required',
            'kurs'=>['required'],
            'talim_tili'=>['required'],
            'semestr'=>'required',
            'code'=>'required',
            'title_subject'=>'required',
            'sinov_imtihon'=>'required',
            'kredit'=>'required',
            'soat'=>'required',
            'lecture'=>'required',
            'practical'=>'required',
            'labs'=>'required',
            'seminar'=>'required',
            'kurs_ishi'=>'required',
            'malakaviy_amaliyot'=>'required',
            'mustaqil_talim'=>'required',


            
        ]);
        return ThirdTable::create($data);
    }
    public function fourth(Request $request)
    {
        $data=$request->validate([
            'faculty'=>'required',
            'kafedra'=>'required'
        ]);
        
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

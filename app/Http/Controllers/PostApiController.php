<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Ilmiyishlar;
use App\Models\Kafedra;
use App\Models\Teacher;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return Kafedra::limit(10)->get();
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
    //newcode
    // public function index()
    // {
    //     return view('home.index');
    // }
    public function main()
    {
        $companies=Kafedra::orderByDesc('created_at')->paginate(20);

        return ['companies'=>$companies];

    }
    // public function save()
    // {
        
       
    //     return view('categories.add');
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function stores(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'lastname'=>'required|min:5',
            'email'=>'required',
            'phone'=>['required','numeric', new PhoneNumber]
            
        ]);
        // dd($request);
        Kafedra::create($data);
        
        return redirect()->route('request.main');
    }
    // public function create()
    // {
    //     return view('home.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function sciense()
    {
        $documents=Ilmiyishlar::orderByDesc('created_at')->paginate(20);
        return ['documents'=>$documents];
        // return view('ilmiy.index1',compact('documents'));
    }
    // public function sciense_create()
    // {
    //     return view('ilmiy.creat');
    // }
    public function sciense_save(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'ish_nomi'=>'required',
            'darajasi'=>'required',
            'email'=>'required',
            
        ]);
        Ilmiyishlar::create($data);
        return redirect()->route('request.sciense');
    }
    public function sciense_update(Request $request, string $id)
    {
        
        $data=$request->validate([
            'name'=>'required|min:5',
            'ish_nomi'=>'required',
            'darajasi'=>'required',
            'email'=>'required',
            
        ]);
       
        $company=Ilmiyishlar::findOrFail($id);
        
        $company->update($data);
        return redirect()->route('request.sciense');

    }
    public function sciense_show(string $id)
    {
        $company=Ilmiyishlar::findOrFail($id);
        return ['company'=>$company];
        // return view('ilmiy.main',compact('company'));
    }
    public function sciense_edit(string $id)
    {
        $company=Ilmiyishlar::findOrFail($id);
        return ['company'=>$company];
        // return view('ilmiy.update',compact('company'));
    }
    public function sciense_destroy(string $id)
    {
        $company=Ilmiyishlar::findOrFail($id);
        $company->delete();
        return redirect()->route('request.sciense');
    }

    //yuklama
    // public function yuklama()
    // {
    //     return view('yuklama.yuklama');
    // }
    //
    //teacher
    public function teacher()
    {
        $documents=Teacher::orderByDesc('created_at')->paginate(20);
        return ['documents'=>$documents];
        // return view('teacher.index1',compact('documents'));
    }
    // public function teacher_create()
    // {
    //     return view('teacher.creat');
    // }
    public function teacher_save(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'maqolalar_soni'=>'required',
            'tezis_soni'=>['required','numeric'],
            'ilmiy_kitoblar_soni'=>['required','numeric'],
            'unvon'=>'required',
            'mutaxasisligi'=>'required',
            'year'=>'required'
            
        ]);
        
        Teacher::create($data);
        return redirect()->route('home.teacher');
    }
    public function teacher_update(Request $request, string $id)
    {
        
        $data=$request->validate([
            'name'=>'required|min:5',
            'maqolalar_soni'=>'required',
            'tezis_soni'=>['required','numeric'],
            'ilmiy_kitoblar_soni'=>['required','numeric'],
            'unvon'=>'required',
            'mutaxasisligi'=>'required',
            'year'=>'required'
            
        ]);
       
        $company=Teacher::findOrFail($id);
        
        $company->update($data);
        return redirect()->route('home.teacher');

    }
    public function teacher_show(string $id)
    {
        $company=Teacher::findOrFail($id);
        return ['company'=>$company];
        // return view('teacher.main',compact('company'));
    }
    public function teacher_edit(string $id)
    {
        $company=Teacher::findOrFail($id);
        return ['company'=>$company];
        
        // return view('teacher.update',compact('company'));
    }
    public function teacher_destroy(string $id)
    {
        $company=Teacher::findOrFail($id);
        $company->delete();
        return redirect()->route('home.teacher');
    }

    //
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'email'=>'required',
            'phone'=>['required','numeric', new PhoneNumber],
            'message'=>'required'
        ]);
        // dd($request);
        // Employee::create($data);
        $company=new Employee();
        $company->name=$data['name'];
        $company->email=$data['email'];
        $company->phone=$data['phone'];
        $company->message=$data['message'];
        $company->save();
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company=Kafedra::findOrFail($id);
        // return view('categories.main',compact('company'));
        return ['company'=>$company];

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company=Kafedra::findOrFail($id);
        // return view('categories.edit',compact('company'));
        return ['company'=>$company];

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'lastname'=>'required|min:5',
            'email'=>'required',
            'phone'=>['required','numeric', new PhoneNumber],
            
        ]);
        $company=Kafedra::findOrFail($id);
        
        $company->update($data);
        return redirect()->route('companies.main');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company=Kafedra::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.main');
    }
    // public function about()
    // {
    //     return view('abouts.about');
    //     // return 'salom';
    // }
    
}

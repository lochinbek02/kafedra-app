<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Ilmiyishlar;
use App\Models\Kafedra;
use App\Models\NewsTable;
use App\Models\Teacher;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Response;
class KafedraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('check-auth');
       
    // } 
    public function index()
    {
        $newss = NewsTable::latest('created_at')->first();

        // dd($newss->rasm);
        return view('home',compact('newss'));
    }
    
    public function main()
    {
        $companies=Kafedra::orderByDesc('created_at')->paginate(20);

        return view('home.show',compact('companies'));

    }
    public function save()
    {
        
       
        return view('categories.add');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function stores(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|min:5',
            'lastname'=>'required|min:5',
            'email'=>'required',
            'phone'=>['required','numeric', new PhoneNumber],
            
        ]);
        // dd($request);
        Kafedra::create($data);
        
        return redirect()->route('request.main');
    }
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sciense()
    {
        $documents=Ilmiyishlar::orderByDesc('created_at')->paginate(20);

        return view('ilmiy.index1',compact('documents'));
    }
    public function sciense_create()
    {
        return view('ilmiy.creat');
    }
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
        return view('ilmiy.main',compact('company'));
    }
    public function sciense_edit(string $id)
    {
        $company=Ilmiyishlar::findOrFail($id);
        
        return view('ilmiy.update',compact('company'));
    }
    public function sciense_destroy(string $id)
    {
        $company=Ilmiyishlar::findOrFail($id);
        $company->delete();
        return redirect()->route('request.sciense');
    }

    //yuklama
    public function yuklama()
    {
        return view('yuklama.yuklama');
    }
    //
    //teacher
    public function teacher()
    {
        $documents=Teacher::orderByDesc('created_at')->paginate(20);
        
        return view('teacher.index1',compact('documents'));
    }
    public function teacher_create()
    {
        return view('teacher.creat');
    }
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
        return view('teacher.main',compact('company'));
    }
    public function teacher_edit(string $id)
    {
        $company=Teacher::findOrFail($id);
        
        return view('teacher.update',compact('company'));
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
        return view('categories.main',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company=Kafedra::findOrFail($id);
        return view('categories.edit',compact('company'));
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
    public function about()
    {
        return view('abouts.about');
        // return 'salom';
    }
    
    //News

    public function news()
    {
        return view('NewsPage.news');
    }
    public function newsCreate(Request $request)
    {
        // $data=$request->validate([
        //     'rasm'=>'required',
        //     'title'=>'required',
        //     'content'=>'required'
        // ]);
        // dd($data);
        // NewsTable::create($data);
        // return redirect()->route('news');
        $data=$request->validate([
            'rasm' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $image = $request->file('rasm');
        $imagePath = $image->store('images', 'public');
        NewsTable::create([
            'rasm' => $imagePath,
            'title' => $request->title,
            
            'content'=>$request->content
        ]);
        if ($request->hasFile('rasm')) {
            
            $file = $request->file('rasm');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('mages', $filename);
        } else {
            $filename = 'default_image.jpg';
        }
      
        // dd($imagePath);
       
        // Save the news data to the database
        // dd($filename);
        // $news = new NewsTable();
        // $news->title = $request->input('title');
        // $news->content = $request->input('content');
        // $news->rasm = 'images/' .$filename; // Save the filename in the 'image' column
        // $news->save();
        
        // // Redirect or show a success message as needed
        return redirect()->route('companies.index')->with('success', 'News created successfully');
    }
    // public function newsContent()
    // {
    //     $newss=NewsTable::orderByDesc('created_at')->peginate(20);
    //     return view('home.index',compact('newss'));
    // }
    public function showImage($id)
    {
        $news = NewsTable::findOrFail($id);

        return response($news->rasm)->header('Content-Type', 'image/jpeg');
    }
}

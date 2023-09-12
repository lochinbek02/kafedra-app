<?php

namespace App\Http\Controllers;

use App\Models\NewsTable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newss = NewsTable::latest('created_at')->first();

        // dd($newss->rasm);
        return view('home',compact('newss'));
    }
}

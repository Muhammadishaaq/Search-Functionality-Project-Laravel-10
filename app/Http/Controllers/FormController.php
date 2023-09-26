<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;

class FormController extends Controller
{
    public function search_data(Request $request){
        $data=$request->input('search');
        $records=DB::table('books')->where('name','like','%'.$data.'%')->orwhere('author','like','%'.$data.'%')->get();
        return view('record',compact('records'));


    }
    public function records(){
        $records=Book::all();
        return view('record',compact('records'));
       
    }
}

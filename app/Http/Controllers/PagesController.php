<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        $title = 'Welcome to The Plate District!';
        return view ('pages.index')->with('title',$title);
    }
    public function products(){
        $data = array (
            'plate1' => 'RE10AD T',
            'jplates' => ['A R15KY G', 'EE14M YE','X5 0H YH']

        );
        return view('pages.products')->with($data);
    }

    public function about(){
        return view('pages.about'); 
    }
}

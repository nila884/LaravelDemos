<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Http\Request;

class PagesController extends Controller
{
        //
        public function index()
        {
            return view('index');
        }
        public function about()
        {
            return response()->json();
        }
        public function services()
        {
            return view('pages.services');
        }
        // public function adminIndex()
        // {
           
        // return view('admin.index');
        // }
}

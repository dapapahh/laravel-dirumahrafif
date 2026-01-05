<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $section = Section::all();
        $partner = Partner::all();
        return view('depan', compact('section', 'partner'));
    }
}
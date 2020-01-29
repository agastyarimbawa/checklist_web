<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}

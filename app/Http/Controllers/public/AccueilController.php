<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('public.index');
    }
}

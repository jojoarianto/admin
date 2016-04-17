<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{
    public function index()
    {
    	return view('admin.contents.soal.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keis;

class KeisController extends Controller
{
    public function index(){
        $cases = Keis::all();

        return view('cases.index', ['cases' => $cases]);
    }
}

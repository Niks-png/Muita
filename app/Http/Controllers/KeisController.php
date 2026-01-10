<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keis;

class KeisController extends Controller
{
    public function index(){
        $cases = Keis::paginate(10);

        return view('cases.index', ['cases' => $cases]);
    }
}

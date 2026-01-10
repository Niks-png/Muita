<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index(){
        $documents = Document::paginate(10);
        return view('documents.index', ['documents' => $documents]);
    }
    public function show($id){
        $document = Document::findOrFail($id);
        return view('documents.show', compact('document'));
    }
        public function create(){
        return view('documents.create');
    }
    
}

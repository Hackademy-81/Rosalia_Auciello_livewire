<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function create(){
        return view('article/create'); 
    }

    public function index(){
        return view('article/index'); 
    }

    public function edit($id){
        $article= Article::findOrFail($id); 
        return view('article/edit', compact('article')); 
        
    }
}

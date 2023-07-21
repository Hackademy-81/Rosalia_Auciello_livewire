<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articlestable extends Component
{

    public $search= ''; 
    public function render()
    {   
        if ($this->search=='') {
            $articles= Article::all(); 
        } else {
            $articles= Article::where('title', 'LIKE', '%' .$this->search. '%')->get(); 
        }
        
        
        return view('livewire.articlestable', compact('articles'));
    }

    public function deleteArticle($id){
        $article= Article::findOrFail($id); 
        $article->delete(); 
    }
}

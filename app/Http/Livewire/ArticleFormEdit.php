<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleFormEdit extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $idArticle; 

    protected $rules = [
        'title' => 'required|min:6',
        'subtitle' => 'required|min:6',
        'body'=>'required|min:10|max:100'
    ];

    protected $messages=[
        'title.required'=>'il titolo è richiesto',
        'title.min'=>'il titolo è troppo corto',
        'subtitle.required'=>'il sottotitolo è richiesto',
        'subtitle.min'=>'il sottotitolo è troppo corto',
        'body.required'=>'il corpo è richiesto',
        'body.min'=>'il corpo è troppo corto',
        'body.max'=>'il corpo è troppo lungo', 
    ]; 

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }
    public function render()
    {
        return view('livewire.article-form-edit');
    }

    public function mount($articleId){
        $article= Article::findOrFail($articleId);
        $this->idArticle= $article->id; 
        $this->title= $article->title;
        $this->subtitle= $article->subtitle;
        $this->body= $article->body; 
        
    }

    public function updateArticle(){
       $article= Article::findOrFail($this->idArticle); 
       $this->validate(); 
       $article->update(
        [
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'body'=>$this->body, 
        ],
    ); 

        return redirect()->route('article.index'); 
    }
}

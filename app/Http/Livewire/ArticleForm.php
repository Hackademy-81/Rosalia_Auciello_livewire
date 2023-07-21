<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $subtitle; 
    public $body; 

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

    public function render()
    {
        return view('livewire.article-form');
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function save(){
        $this->validate(); 
        Article::create(
            [
                'title'=> $this->title,
                'subtitle'=> $this->subtitle,
                'body'=>$this->body, 
            ]
            ); 

        $this->reset(); 
    }
}

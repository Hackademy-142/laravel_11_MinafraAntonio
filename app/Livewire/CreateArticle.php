<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required', message: 'Il campo è obligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 3 caratteri.')]
    public $title;

    #[Validate('required|min:3')]
    public $subtitle;

    #[Validate('required|min:3')]
    public $body;


    public function store()
    {
        $this->validate();
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body'=> $this->body
        ]);

        /* messaggio di errore direttamente con livewire */
        session()->flash('message', 'Articolo creato');

        $this->reset();/* metodo di livewire che ti svuota i campi input dopo il submit */
    }

    public function render()
    {
        return view('livewire.create-article');
    }

}

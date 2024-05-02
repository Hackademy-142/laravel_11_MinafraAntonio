<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{

    #[Validate('required', message: 'Il campo è obligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 3 caratteri.')]
    public $title;

    #[Validate('required|min:3')]
    public $subtitle;

    #[Validate('required|min:3')]
    public $body;

    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function updateArticle()
    {
        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);


        // $this->clearForm();
        $this->reset();

        session()->flash('message', 'Articolo aggiornato');
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}

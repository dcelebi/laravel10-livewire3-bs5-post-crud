<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\Post;

class PostForm extends Form
{
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:3')]
    public $body;

    public function save()
    {
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }
}

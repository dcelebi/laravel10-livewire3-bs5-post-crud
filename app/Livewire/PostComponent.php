<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;
use Livewire\WithPagination;


class PostComponent extends Component
{

    use WithPagination;

    //public PostForm $form;

    public $isOpen = 0;
    public $postId;

    #[Rule('required|min:3')]
    public $title;
    #[Rule('required|min:3')]
    public $body;

    public function create(){
        $this->reset('title','body','postId');
        $this->openModal();
    }
    public function openModal(){
        $this->resetValidation();
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    public function store()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        session()->flash('success', 'Post created successfully.');

        $this->reset('title','body');
        $this->closeModal();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->postId = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->openModal();
    }

    public function update()
    {
        if ($this->postId) {
            $post = Post::findOrFail($this->postId);
            $post->update([
                'title' => $this->title,
                'body' => $this->body,
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('title', 'body', 'postId');
        }
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('success', 'Post deleted successfully.');
        $this->reset('title','body');
    }

    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::paginate(5)
        ]);
    }
}

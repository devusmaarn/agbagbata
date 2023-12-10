<?php

namespace App\Livewire\Dashboard\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title = '';
    public  $description = '';
    public $thumbnail;

    public function create(){

        $validated = $this->validate([
            'title' => ['required', 'string', 'min:6', 'max:55'],
            'description' => ['required', 'string', 'min:20'],
            'thumbnail' => ['required', 'image', 'max:1024'],
        ]);

        $thumbnail = str($this->thumbnail->store('/public/projects/thumbnails'))->replace('public', '');

        Project::create([
            'id' => uniqid('proj-'),
            ...$validated,
            'user_id' => auth()->id(),
            'thumbnail' => $thumbnail,
        ]);

        session()->flash('message', 'New Project Created Successfully!');
        return $this->redirect(route('project.index'), navigate: true);
    }

    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('project.create');
    }
}

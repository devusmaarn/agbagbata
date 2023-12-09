<?php

namespace App\Livewire\Dashboard\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{

    public $title = '';
    public  $description = '';

    public function create(){

        $validated = $this->validate([
            'title' => ['required', 'string', 'min:6', 'max:55'],
            'description' => ['required', 'string', 'min:20'],
        ]);

        Project::create([
            'id' => uniqid('proj-'),
            ...$validated,
            'user_id' => auth()->id(),
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

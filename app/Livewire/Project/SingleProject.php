<?php

namespace App\Livewire\Project;

use App\Models\Donation;
use App\Models\Project;
use Livewire\Component;

class SingleProject extends Component
{
    public $project;

    public function mount(Project $project){
        $this->project = $project->with('donations')->first();
    }

    public function render()
    {
        return view('project.single-project');
    }
}

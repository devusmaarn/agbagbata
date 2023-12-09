<?php

namespace App\Livewire\Dashboard\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.dashboard')]

    public $projects = [];

    public function mount(){
        $this->projects = Project::all();
    }

    public function addDonor() {

    }

    public function render()
    {
        return view('project.index');
    }
}

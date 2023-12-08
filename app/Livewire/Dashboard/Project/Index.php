<?php

namespace App\Livewire\Dashboard\Project;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('project.index');
    }
}

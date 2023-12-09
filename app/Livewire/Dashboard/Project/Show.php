<?php

namespace App\Livewire\Dashboard\Project;

use App\Livewire\Forms\DonationForm;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.dashboard')]

    public Project $project;

    public $donations = [];

    public DonationForm $form;

    public function add_donation(){
        $validated = $this->form->validate();
        $this->project->donations()->create($validated);
        $this->donations = $this->project->donations;
        $this->form->reset();
    }

    public function mount(Project $project) {
        $this->project = $project;
        $this->donations = $project->donations;
    }

    public function render()
    {
        return view('dashboard.project.show');
    }
}

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
    public $promises = [];

    public DonationForm $form;

    public function add_donation(){
        $validated = $this->form->validate();
        $this->project->donations()->create([
            ...$validated,
            'user_id' => auth()->id()
        ]);
        $this->donations = $this->project->donations()->where('fulfilled', true)->get();
        $this->promises = $this->project->donations()->where('fulfilled', false)->get();
        $this->form->reset();
    }

    public function mount(Project $project) {
        $this->project = $project;
        $this->donations = $project->donations()->where('fulfilled', true)->get();
        $this->promises = $this->project->donations()->where('fulfilled', false)->get();
    }

    public function render()
    {
        return view('dashboard.project.show');
    }
}

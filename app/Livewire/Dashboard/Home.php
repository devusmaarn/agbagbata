<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.dashboard')]
    
    public function render()
    {
        return view('dashboard.home');
    }
}

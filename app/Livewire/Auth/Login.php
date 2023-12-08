<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    public function login(){

        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        if(Auth::attempt($validated)){
            session()->regenerate();
            return $this->redirect(route('dashboard'), navigate: true);
        }

        $this->reset('password');

        return $this->addError('status', 'Incorrect Email or Password');
    }

    public function render()
    {
        return view('auth.login');
    }
}

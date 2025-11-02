<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthLoginLivewire extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            return $this->redirectRoute('app.home', navigate: true);
        }

        session()->flash('error', 'Email atau password salah');
    }

    public function render()
    {
        return view('livewire.auth-login-livewire');
    }
}

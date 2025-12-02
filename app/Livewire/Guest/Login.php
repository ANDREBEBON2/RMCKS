<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Layout('components.layouts.guest')]


    public $email = '';
    public $password = '';

    public function masuk(){
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        $this->addError('email', 'username atau password salah.');


    }

    public function render()
    {
        return view('livewire.guest.login');
    }
}

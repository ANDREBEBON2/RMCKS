<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\UserVerificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = ''; // Untuk konfirmasi password

    // Aturan validasi
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
{
   $this->validate();

    $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
        'verification_token' => Str::random(64),
        'email_verified_at'=> null,
        'active' => false,
    ]);

    if (!$user->verification_token) {
            dd("Error: Token kosong! Cek model User \$fillable Anda.");
        }

    Mail::to($user->email)->send(new UserVerificationMail($user));


    // 4. Feedback
        session()->flash('success', 'User dibuat & email verifikasi terkirim!');
        $this->reset(); // Kosongkan form

}

    public function render()
    {
        return view('livewire.auth.register');
    }
}

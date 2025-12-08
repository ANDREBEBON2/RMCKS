<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiEmail extends Controller
{
    public function verifyEmail(string $token){
        try{
        $user = User::where('verification_token', $token)->firstOrFail();

          // 2. Update User
        $user->update([
            'email_verified_at' => now(),
            'verification_token' => null, // Hapus token agar link mati
            'active' => true,
        ]);

        // 3. Login Otomatis
        Auth::login($user);

        // 4. Redirect ke Dashboard
        return redirect()->route('dashboard')
            ->with('success', 'Akun berhasil diverifikasi. Selamat datang!');
    }catch (\Throwable $th) {
            return redirect()->route('login')->with('redirectLogin', 'Maaf, tautan hanya digunakan sekali.');
        }
    }
};

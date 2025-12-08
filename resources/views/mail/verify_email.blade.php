<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 id="welcome" class="text-4xl">Halo, {{ $user->name }}!</h1>
    <p>Admin telah membuatkan akun untuk Anda.</p>
    <p>Silakan klik tombol di bawah ini untuk mengaktifkan akun dan login otomatis:</p>

    {{-- Kita panggil variabel $url yang sudah disiapkan di Mailable --}}
    <a href="{{ $url }}" style="background: blue; color: white; padding: 10px; text-decoration: none;">
        Verifikasi Akun Saya
    </a>

    <p>Jika tombol tidak berfungsi, copy link ini: {{ $url }}</p>
</body>
</html>

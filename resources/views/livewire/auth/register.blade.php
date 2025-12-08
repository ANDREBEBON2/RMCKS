<div class="registration-form">
    <x-navbar-mini>
        Registrasi User
    </x-navbar-mini>


    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif


    <form wire:submit.prevent="register" >
        <div class="grid md:grid-cols-2 md:gap-5 text-primarys shadow-md p-4 bg-white rounded-lg">
            <div class="flex flex-col mb-3 space-y-1">
                <label for="name" class="text-md">Username</label>
                <input type="text" id="name" class="bg-gray-100 px-2 rounded py-2 text-sm focus:outline-none focus:ring-2 focus:ring-accent" autocomplete="off" wire:model.defer="name">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col mb-3 space-y-1">
                <label for="email" class="text-md">Email</label>
                <input type="email" id="email" class="bg-gray-100 px-2 rounded py-2 text-sm focus:outline-none focus:ring-2 focus:ring-accent" autocomplete="off" wire:model.defer="email">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col mb-3 space-y-1">
                <label for="password" class="text-md">Password</label>
                <input type="password" id="password" class="bg-gray-100 px-2 rounded py-2 text-sm focus:outline-none focus:ring-2 focus:ring-accent" autocomplete="off" wire:model.defer="password">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col mb-3 space-y-1">
                <label for="password_confirmation" class="text-md">Confirmation Password</label>
                <input type="password" id="password_confirmation" class="bg-gray-100 px-2 rounded py-2 text-sm focus:outline-none focus:ring-2 focus:ring-accent" autocomplete="off" wire:model.defer="password_confirmation">
            </div>
        </div>

        <div class="flex gap-5 mt-4">
            <button
            type="submit"
            class="bg-secondary font-bold tracking-wider mt-3 h-10 px-7 text-sm text-accent rounded hover:scale-95 duration-150 shadow-lg"
            wire:loading.attr="disabled"
            wire:target="register"
            >
            <span wire:loading.remove wire:target="register">
                Daftar
            </span>
             <span wire:loading wire:target="register">
                Sedang Mengirim... ⏳
            </span>
            </button>
            <a href="{{ route('user') }}" wire:navigate class="shadow-lg flex items-center justify-center w-fit bg-accent font-bold tracking-wider mt-3 h-10 px-7 text-sm text-primary rounded hover:scale-95 duration-150">Kembali</a>
        </div>
    </form>
</div>

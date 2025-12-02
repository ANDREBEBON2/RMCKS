<div class="h-dvh">
    <div class="md:grid md:grid-cols-2 h-full">
        <div class="bg-primary flex items-center justify-center">
            <div class="lebar_default text-white space-y-2 hidden md:block text-center">
                <div class="flex items-center justify-center gap-3 py-5">
                    <div class="w-14 h-14 rounded-full bg-accent"></div>
                    <div class="text-5xl font-extrabold text-accent">RMCKS</div>
                </div>
                <h1 class="text-7xl font-semibold">Halaman Login</h1>
                <h1 class="font-medium text-xl">Silahkan Login Terlebih Dahulu</h1>
            </div>
        </div>
        <div style="background-image: url('/asset/bg_login.png')"
            class="bg-cover bg-no-repeat bg-center h-full bg-black/50 bg-blend-overlay ">
            <div class="lebar_default h-full">
                <div class="flex items-center justify-center h-full ">
                    <div class="max-w-xl w-full text-white bg-white/40 backdrop-blur-sm rounded-lg py-10 px-6">
                        <div class="flex items-center justify-center py-7 md:hidden">
                            <h1 class="text-2xl font-bold">Halaman Login</h1>
                        </div>
                        <form action="" wire:submit="masuk">
                            <div class="space-y-10">
                                <div class="flex flex-col gap-1">
                                    <label for="">Email</label>
                                    <input type="text" wire:model="email" required
                                        class="py-1.5 px-1 focus:outline-none border-b" placeholder="Jhon Doe">
                                    @error('email')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="">Password</label>
                                    <input type="text" required wire:model="password"
                                        class="py-1.5 px-1 focus:outline-none border-b" placeholder="******">
                                </div>
                                <div class="flex flex-col py-3">
                                    <button
                                        class="py-2 max-w-32 w-full bg-accent rounded-full font-medium">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-[250px] bg-primary p-2 fixed h-full left-0 top-0 shadow-xl">

    <div class="px-5 py-5">
        <div class="space-y-10">
            <div class="flex items-center gap-3">
                <div class="h-10 w-10 bg-accent rounded-full"></div>
                <div class="text-2xl font-bold text-accent">RMCKS</div>
            </div>

            <div class="w-full">
                <div class="w-full flex flex-col gap-1">
                    <a wire:navigate href="{{ route('dashboard') }}" class="py-3 px-2 w-full rounded-xl  {{ request()->routeIs('dashboard') ? 'bg-accent text-primary' : 'text-accent hover:bg-secondary'}}">Dashboard</a>
                    <a wire:navigate href="{{ route('outlite') }}" class="py-3 px-2 w-full rounded-xl  {{ request()->routeIs('outlite') ? 'bg-accent text-primary' : 'text-accent    hover:bg-secondary'}}">Outlite</a>
                </div>
            </div>
        </div>
    </div>
</div>

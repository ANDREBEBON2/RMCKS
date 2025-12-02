<div class="w-[250px] bg-primary p-2 fixed h-full left-0 top-0 shadow-xl">

    <div class="px-5 py-5">
        <div class="space-y-10">
            <div class="flex items-center gap-2">
                <x-icons.logo class="size-10 text-accent"/>
                <div class="text-2xl font-bold text-accent">Cap Karoso</div>
            </div>

            <div class="w-full">
                <div class="w-full flex flex-col gap-1">
                    <a wire:navigate href="{{ route('dashboard') }}" class="py-3 px-2 w-full rounded-xl flex gap-3 {{ request()->routeIs('dashboard') ? 'bg-accent text-primary' : 'text-accent hover:bg-secondary'}}">
                        <x-icons.dashboard class="size-6"/>
                        <span>Dashboard</span>
                    </a>
                    <a wire:navigate href="{{ route('outlet') }}" class=" flex gap-3 py-3 px-2 w-full rounded-xl  {{ request()->routeIs('outlet') ? 'bg-accent text-primary' : 'text-accent    hover:bg-secondary'}}">
                        <x-icons.outlet class="size-6"/>
                        <span>Outlet</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

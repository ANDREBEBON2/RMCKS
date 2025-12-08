<div class="h-16 flex items-center">
    <div class="flex items-center justify-between w-full gap-4">
        <h1 class="font-semibold text-primary">{{ $slot }}</h1>
        <div class="md:hidden">
            <button class="p-2">M</button>
        </div>
        <div class="hidden md:flex md:gap-3 items-center justify-center">
            <span class="cursor-text">Hi, <span class="font-bold">{{ auth()->user()?->name }}</span> </span>
            <a href="" class="flex items-center justify-center">
                <x-icons.setting class="size-5 text-secondary hover:rotate-90 transform transition-all duration-300 ease-in-out"/>
            </a>
        </div>
    </div>
</div>

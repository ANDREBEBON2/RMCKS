<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Component;


class Welcome extends Component
{
    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.guest.welcome');
    }
}

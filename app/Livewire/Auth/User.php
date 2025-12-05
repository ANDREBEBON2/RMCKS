<?php

namespace App\Livewire\Auth;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public function render()
    {
        $users = ModelsUser::latest()->paginate(10);
        return view('livewire.auth.user', [
            'users' => $users
        ]);
    }
}

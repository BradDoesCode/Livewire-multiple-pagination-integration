<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class UsersView extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function placeholder(array $params = [])
    {
        return view('livewire.components.list-placeholder', $params);
    }


    public function users()
    {
        // sleep(3);
        return User::cursorPaginate(5);
    }


    public function render()
    {
        return view('livewire.users-view', [
            'users' => $this->users()
        ]);
    }
}

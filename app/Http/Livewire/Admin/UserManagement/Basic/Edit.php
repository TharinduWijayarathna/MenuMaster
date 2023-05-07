<?php

namespace App\Http\Livewire\Admin\UserManagement\Basic;

use App\Models\User;
use Livewire\Component;


class Edit extends Component
{
    public $user, $userId;

    public function mount()
    {
        $this->user = new User();
    }


    public function render()
    {
        return view('pages.admin.user_management.components.edit-form');
    }

    protected function rules()
    {
        return [
            'user.name' => 'required|min:3',
            'user.email' => 'required|email',
            'user.password' => 'required|min:8',
            'user.password_confirmation' => 'required|min:8|same:user.password',
        ];
    }


    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function getUser($id)
    {
        $this->user = User::withTrashed()->find($id);
        $this->userId = $id;
    }

    public function submit()
    {
        $this->validate();
        dd($this->user);
        $this->user->save();
    }
}

<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{
    use WithFileUploads;

    public $user;
    public $document, $name, $email, $password, $address, $phone, $is_active, $profile_photo_path, $selectedRole;
    public $open_edit = false;

    protected $rules = [
        'document'           => 'nullable',
        'name'               => 'required|max:50',
        'email'              => 'required|email',
        'password'           => 'nullable|min:8',
        'address'            => 'nullable',
        'phone'              => 'nullable',
        'is_active'          => 'nullable',
        'profile_photo_path' => 'nullable|image|max:2048',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->document = $user->document;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->address = $user->address;
        $this->phone = $user->phone;
        $this->is_active = $user->is_active;
        $this->selectedRole = $user->roles->first()->name ?? null;
    }

    public function update()
    {
        $this->validate();

        // Actualizar el usuario en la base de datos
        $userData = [
            'document' => $this->document,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'address' => $this->address,
            'phone' => $this->phone,
            'is_active' => $this->is_active,
        ];
        $this->user->update($userData);

        if ($this->selectedRole) {
            // Actualizar el rol si se ha seleccionado uno nuevo
            $this->user->syncRoles([$this->selectedRole]);
        }

        if ($this->profile_photo_path) {
            // Actualizar la imagen si se ha cargado una nueva
            $image_url = $this->profile_photo_path->store('users');
            $this->user->update(['profile_photo_path' => $image_url]);
        }

        if ($this->password) {
            $userData['password'] = Hash::make($this->password);
        }


        $this->open_edit = false;
        $this->emitTo('users.users', 'render');
        $this->emit('alert', '¡Usuario Actualizado Exitosamente!');
    }

    public function render()
    {
        $roles = Role::all();

        return view('livewire.users.user-edit', ['roles' => $roles]);
    }
}

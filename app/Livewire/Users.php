<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $phone, $email, $user_id;
    protected $rules = [
        'name' => 'required|min:2',
        'phone' => 'required|numeric',
        'email' => 'required',
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function store()
    {
        $data = $this->validate();
        User::create($data);
        $this->resetData();
        $this->dispatch('create-modal');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->phone = $user->phone;
            $this->email = $user->email;
        } else {
            return redirect()->to('/');
        }
    }

    public function update()
    {
        $data = $this->validate();
        $user = User::findOrFail($this->user_id);
        $user->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
        $this->resetData();
        $this->dispatch('edit-modal');
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $this->user_id = $user->id;
        } else {
            return redirect()->to('/');
        }
    }
    public function destroy()
    {
        User::findOrFail($this->user_id)->delete();
        $this->dispatch('delete-modal');
    }

    public function resetData()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => User::paginate(3)
        ]);
    }
}

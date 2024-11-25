<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:6')]
    public $password;

    public function submitform()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('success', 'Login successful');

            return redirect()->to('/dashboard');
        } else {
            session()->flash('formerror', 'Invalid credentials');
        }
    }
    public function render()
    {
        return view('livewire.login-form');
    }

}

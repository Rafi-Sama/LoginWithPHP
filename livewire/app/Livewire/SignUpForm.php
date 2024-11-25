<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SignUpForm extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:6')]
    public $password;
    #[Validate('required|same:password')]
    public $cpassword;

    public function submitform()
    {
        $this->validate();

        $exist = User::where('email', $this->email)->exists();

        if( $exist ) {
            session()->flash('formerror', 'Email already exists');
            return;
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        if($user) {
            session()->flash('success', 'User created successfully');
        } else {
            session()->flash('formerror', 'User creation failed.');
        }
    }

    public function render()
    {
        return view('livewire.sign-up-form');
    }
}

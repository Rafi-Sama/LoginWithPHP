<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    // public $show = false;
    public function logout(){
        Auth::logout();
        return redirect('/login');
        // $this->show = true;
    }

    public function render()
    {
        return view('livewire.logout');
    }
}

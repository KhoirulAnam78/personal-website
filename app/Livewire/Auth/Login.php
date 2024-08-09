<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class Login extends Component
{
    public $username,$password;

    public function authenticate(){
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = new LoginRequest;

        $request = new Request([
            'username' => $this->username,
            'password' => $this->password
        ]);
        
        $credentials->replace($request->all());
        
        $credentials->authenticate();

        return redirect()->intended(RouteServiceProvider::HOME);
        
    }
    public function render()
    {
        return view('livewire.auth.login')
        ->layout('layouts.front.main');
    }
}
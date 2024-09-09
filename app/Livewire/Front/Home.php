<?php

namespace App\Livewire\Front;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $time = DB::table('testing')->latest()->first();

        return view('livewire.front.home', compact('time'))
            ->layout('layouts.front.main');
    }
}

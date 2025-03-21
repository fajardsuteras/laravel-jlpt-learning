<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Home extends Component
{
    public function switchLanguage($lang)
    {
        App::setLocale($lang);
        Session::put('locale', $lang);
    }

    public function render()
    {
        return view('livewire.home');
    }
}

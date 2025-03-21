<?php

namespace App\Livewire;

use Livewire\Component;

class KatakanaConverter extends Component
{
    public $inputText = '';
    public $convertedText = '';

    public function convertToKatakana()
    {
        $this->convertedText = \App\Helpers\Kanna::toKatakana($this->inputText);
    }
    public function render()
    {
        return view('livewire.katakana-converter');
    }
}

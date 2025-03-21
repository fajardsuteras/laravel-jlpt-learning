<?php

namespace App\Livewire;

use Livewire\Component;

class HiraganaConverter extends Component
{
    public $inputText = '';
    public $convertedText = '';

    public function convertToHiragana()
    {
        $this->convertedText = \App\Helpers\Kanna::toHiragana($this->inputText);
    }
    public function render()
    {
        return view('livewire.hiragana-converter');
    }
}

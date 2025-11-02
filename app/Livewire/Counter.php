<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    // Nonaktifkan layout default
    protected string|false $layout = false;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
    public function save()
    {
        // Contoh: hanya menampilkan pesan
        session()->flash('message', "Nilai count berhasil dikirim: {$this->count}");
    }

 
}

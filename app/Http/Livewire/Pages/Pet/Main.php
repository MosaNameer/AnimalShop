<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Pet;
use Livewire\Component;

class Main extends Component
{
    public $pet;
    public function render()
    {
        $this->pet = Pet::all();
        return view('livewire.pages.pet.main');
    }
}

<?php

namespace App\Http\Livewire\Pages\Pet;

use Livewire\Component;

class PetCard extends Component
{
    public $pet;
    public function render()
    {
        // get all pets from database
        return view('livewire.pages.pet.pet-card');
    }
}

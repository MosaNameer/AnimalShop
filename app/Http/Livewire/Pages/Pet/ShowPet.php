<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Pet;
use Livewire\Component;

class ShowPet extends Component
{
    public $pet;
    public function mount($id)
    {
        $this->pet = Pet::find($id);
    }
    public function render()
    {
        return view('livewire.pages.pet.show-pet');
    }

}

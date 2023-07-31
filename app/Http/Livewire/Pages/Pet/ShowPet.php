<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Pet;
use Livewire\Component;

class ShowPet extends Component
{
    public $pet;
    public $ID;

    public function deletePet($id)
    {
        $this->ID = $id;
        \App\Models\Pet::findOrFail($this->ID)->delete();
        return redirect()->route('pet');
    }
    public function mount($id)
    {
        $this->pet = Pet::find($id);
    }
    public function render()
    {
        return view('livewire.pages.pet.show-pet');
    }

}

<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Pet;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowPet extends Component
{
    use WithFileUploads;

    protected $listeners = ['$refresh', 'search', 'deletePet', 'closeModal'];
    public $name, $age, $price, $gender, $description, $breed, $color, $image, $category_id;
    public $pet;
    public $my_modal1;

    public $ID;



    protected $rules = [
        'name' => 'required | string',
        'age' => 'required | numeric',
        'price' => 'required | numeric',
        'gender' => 'required',
        'description' => 'required',
        'breed' => 'required',
        'color' => 'required',
        'category_id' => 'required',
        'image' => 'required | image | mimes:jpeg,png,jpg,gif | max:2048',

    ];
    protected $messages = [
        'required' => 'هذا الحقل مطلوب',
        'min' => 'هذا الحقل يجب أن يكون على الأقل :min حروف',
        'image' => 'هذا الحقل يجب أن يكون صورة',
        'mimes' => 'هذا الحقل يجب أن يكون من نوع :values',
        'max' => 'هذا الحقل يجب أن لا يتجاوز :max كيلوبايت',
        'unique' => 'هذا الحقل موجود مسبقاً',
        'string' => 'يجب ان يكون نص',
        'boolean' => 'يجب ان يكون صح او خطأ',
        'numeric' => 'يجب ان يكون رقم',
    ];

    public function deletePet($id)
    {
        $this->ID = $id;
        Pet::findOrFail($this->ID)->delete();
        return redirect()->route('pet');
    }

    public function edit($id)
    {
        $this->emit('editPet', $id);
    }

    public function closeModal()
    {
        $this->my_modal1 = false;
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

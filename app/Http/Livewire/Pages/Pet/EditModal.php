<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Pet;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditModal extends Component
{

    use WithFileUploads;

    protected $listeners = ['$refresh', 'search', 'deletePet', 'editPet'];
    public $name, $age, $price, $gender, $description, $breed, $color, $image, $category_id;
    public $pet;
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


    public function editPet($id)
    {
        $this->ID = $id;
        // get the pet by id
        $this->pet = Pet::find($id);
        $this->fill($this->pet->only([
            'name',
            'age',
            'price',
            'gender',
            'description',
            'breed',
            'color',
            'image',
            'category_id',
        ]));
        // redirect to the show page
    }

    public function update()
    {
        $this->validate();
        if ($this->image && $this->image != $this->pet->image) {
            $ext = $this->image->extension();
            $name = time() . '.' . $ext;
            $this->image->storeAs('public/pets', $name);
            $this->image = 'storage/pets/' . $name;
        }
        $changes = [];

        if ($this->name != $this->pet->name) {
            $changes[] = ['name', $this->pet->name, $this->name];
        }
        if ($this->age != $this->pet->age) {
            $changes[] = ['age', $this->pet->age, $this->age];
        }
        if ($this->price != $this->pet->price) {
            $changes[] = ['price', $this->pet->price, $this->price];
        }
        if ($this->gender != $this->pet->gender) {
            $changes[] = ['gender', $this->pet->gender, $this->gender];
        }
        if ($this->description != $this->pet->description) {
            $changes[] = ['description', $this->pet->description, $this->description];
        }
        if ($this->breed != $this->pet->breed) {
            $changes[] = ['breed', $this->pet->breed, $this->breed];
        }
        if ($this->color != $this->pet->color) {
            $changes[] = ['color', $this->pet->color, $this->color];
        }
        if ($this->category_id != $this->pet->category_id) {
            $changes[] = ['category_id', $this->pet->category_id, $this->category_id];
        }

        $this->pet->update([
            'name' => $this->name,
            'age' => $this->age,
            'price' => $this->price,
            'gender' => $this->gender,
            'description' => $this->description,
            'breed' => $this->breed,
            'color' => $this->color,
            'category_id' => $this->category_id,
            'image' => $this->image,

        ]);

        session()->flash('success', 'pet updated successfully.');

        $description = 'pet updated by ' . auth()->user()->name;

        foreach ($changes as $change) {
            $description .= ' from ' . $change[1] . ' to ' . $change[2] . ' for ' . $change[0];
        }

        $this->reset();
        $this->emit('petAction');
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.pages.pet.edit-modal');
    }
}

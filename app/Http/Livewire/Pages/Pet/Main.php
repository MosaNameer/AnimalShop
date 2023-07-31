<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Category;
use App\Models\Pet;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Main extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $listeners = ['$refresh', 'search'];

    public $name, $age, $price, $gender, $description, $breed, $color, $image, $category_id;
    public $pet;
    public $categories;
    public $search = '';


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

    function addPet()
    {
        // upload the image to the database
        $this->validate();
        $ext = $this->image->extension();
        $name = time() . '.' . $ext;
        $this->image->storeAs('public/pets', $name);
        $this->image = 'storage/pets/' . $name;
        // add data to the database
        Pet::create([
            "name" => $this->name,
            "age" => $this->age,
            "price" => $this->price,
            "gender" => $this->gender,
            "description" => $this->description,
            "breed" => $this->breed,
            "color" => $this->color,
            "image" => $this->image,
            "category_id" => $this->category_id,
        ]);
        $this->reset();
        session()->flash('message', 'تم إضافة الحيوان بنجاح.');
        return redirect()->to(route('pet'));
    }

    public function mount()
    {
        $this->pet = Pet::all();
        $this->categories = Category::all();
    }
    public function render()
    {
        $search = '%' . $this->search . '%';

        // $this->pet =  Pet::where('name', 'LIKE', $search)->orderByDesc('name')->get();

        $this->pet = Pet::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', $search)->orWhere('breed', 'LIKE', $search);
        })->orderByDesc('name')->get();

        return view('livewire.pages.pet.main');
    }
}

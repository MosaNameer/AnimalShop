<?php

namespace App\Http\Livewire\Pages\Category;

use App\Models\Category;
use Hamcrest\Description;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Main extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name, $description, $image;
    public $search;
    public $category;


    function add(){

        $messages = [
            'required' => 'هذا الحقل مطلوب',
            'min' => 'هذا الحقل يجب أن يكون على الأقل :min حروف',
            'image' => 'هذا الحقل يجب أن يكون صورة',
            'mimes' => 'هذا الحقل يجب أن يكون من نوع :values',
            'max' => 'هذا الحقل يجب أن لا يتجاوز :max كيلوبايت',
            'unique' => 'هذا الحقل موجود مسبقاً',
        ];

        // upload the image to the database
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required', // 1MB Max
        ]);
        $ext = $this->image->extension();
        $name = time() . '.' . $ext;
        $this->image->storeAs('public/categories', $name);
        $this->image = 'storage/categories/' . $name;
        // add data to the database
        Category::create([
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
        ]);
        $this->reset();
        session()->flash('message', 'تم إضافة الفئة بنجاح.');
        return redirect()->to(route('category'));
    }


    // public function mount(){
    // }

    public function render()
    {
        $this->category = Category::where('name', 'like', '%' .$this->search. '%' )->get();
        return view('livewire.pages.category.main');
    }
}

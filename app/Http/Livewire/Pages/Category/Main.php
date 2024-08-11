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


    protected $rules = [
        'name' => 'required | string',
        'description' => 'required' | 'string',
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
    function add(){
        // upload the image to the database
        $this->validate();
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

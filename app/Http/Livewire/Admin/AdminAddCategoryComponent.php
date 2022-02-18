<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\models\Category;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        Session()->flash('message','Category was created successfully');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}

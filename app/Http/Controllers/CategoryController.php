<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\components\Recusive;

class CategoryController extends Controller
{
    private $category;
    public function __construct (Category $category) {
        $this->category = $category;
    }
    public function create () {
        $htmlOption = $this->Category($parentId ='');
        return view('category.add', compact('htmlOption'));
    }
   

    public function index () {
        $categories = $this->category->latest()->paginate(5);
        return view('category.index', compact('categories'));
    }

    public function store (Request $req) {
        $this->category->create(
        [
            'name' => $req->name,
            'parent_id' => $req->parent_id,
            'slug' => $req->name
        ]    
        );
        return redirect()->route('categories.index');
    }

    public function getCategory ($parentId) {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;

    }
    public function edit ($id) {
        
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('category.edit', compact('category', 'htmlOption'));
    }

    public function update ($id,Request $req) {
        $this->category->find($id)->update([
            'name' => $req->name,
            'parent_id' => $req->parent_id,
            'slug' => $req->name
        ]);
        return redirect()->route('categories.index');
    }

    public function delete ($id) {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
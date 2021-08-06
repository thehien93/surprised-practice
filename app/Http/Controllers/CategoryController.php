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
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive();
        return view('category.add', compact('htmlOption'));
    }
   

    public function index () {
        return view('category.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('categories.index');
    }
    public function show(Category $category)
    {
        $productsCategories = Product::where('category_id', $category->id)->get();
        $articlesCategories = Article::where('category_id', $category->id)->get();
        return view('categories.show', compact('productsCategories', 'articlesCategories'));
    }
}

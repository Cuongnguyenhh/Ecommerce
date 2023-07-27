<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $categories = Category::where('visible', 0)
            ->orderBy('view', 'desc')
            ->get();
        return $categories;
    }
}

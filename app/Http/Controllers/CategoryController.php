<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get paginated products for a specific category by id
    public function products($id)
    {
        $category = Category::find($id); // Find category by id
        if (!$category)
            return response()->json(['message' => 'Category not found'], 404);

        // Return paginated products for the category
        return response()->json($category->products()->paginate(15), 200);

    }

    // Get all categories
    public function index()
    {
        return response()->json(Category::all(), 200); // Return all categories
    }
}

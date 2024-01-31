<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index ()
    {
        $category = Category::get();
        return view('category.index', compact('category'));
    }

    public function create ()
    {
        $defaultValues = [
        'is_active' => true,
        ];

        return view('category.create', $defaultValues);
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('categories')->with('status', "category created");
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        // return $category;
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('categories')->with('status', "category updated");
    }

    public function destroy (int $id)
    {
        Category::findOrFail($id)->delete();
        return redirect('categories')->with('status', "category deleted");
    }
}

<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('category.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:255',
            'category_code' => 'nullable',
            'status' => 'nullable'
        ]);

       Category::create([
            'category_code' => $request->category_code,
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'status' => $request->status == true ? 1:0,
        ]);

        return redirect('/category')->with('status','Category created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:255',
            'category_code' => 'nullable',
            'status' => 'nullable'
        ]);

        $category->update([
            'category_code' => $request->category_code,
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'status' => $request->status == true ? 1:0,
        ]);

        return redirect('/category')->with('status','Category updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/category')->with('status','Category Deleted Successfully');
    }
}

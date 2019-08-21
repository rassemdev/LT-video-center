<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;

use Carbon\Carbon;

class CategoryController extends Controller
{
	public function index()
	{
		$allCategories = Category::orderBy('id', 'desc')->get();

		return view('admin.category.index', compact('allCategories'));
	}

	public function add() {

		return view('admin.category.add');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'status' => 'required'
		]);

		$newCategory = new Category();
		$newCategory->name = $request->name;
		$newCategory->status = $request->status;
		
		if ($newCategory->save()) {
			return redirect()->route('category.index')->with('success', 'Category added successfully');
		}

		return back()->with('error', 'Something went wrong!');
	}

	public function edit(Category $category) {

		return view('admin.category.edit', compact('category'));
	}

	public function update(Request $request, Category $category)
	{
		$this->validate($request, [
			'name' => 'required',
			'status' => 'required'
		]);

		$category->name = $request->name;
		$category->status = $request->status;

		if ($category->save()) {
			return redirect()->route('category.index')->with('success', 'Category updated successfully');
		}

		return back()->with('error', 'Something went wrong!');
	}

	public function changeStatus(Request $request, Category $category)
	{
		$category->status = $category->status === 'active' ? 'inactive' : 'active';

		if ($category->save()) {
			return back()->with('success', 'Category status changed');
		}

		return back()->with('error', 'Something went wrong!');
	}
}

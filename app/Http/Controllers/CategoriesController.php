<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $cates = Categories::all();
        return view('category.show', compact('cates'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Categories::create($request->all());
        return redirect('categories');
    }

    public function edit($id)
    {
        $cate = Categories::findOrFail($id);
        return view('category.edit', compact('cate'));
    }

    public function update(Request $request, $id)
    {
        $cate = Categories::findOrFail($id);
        $name = $request->input('name');
        $mota = $request->input('mota');
        var_dump($mota);
        die;

        $cate->update($request->all());
        return redirect('categories');
    }
}

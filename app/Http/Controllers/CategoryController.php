<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        $category = Category::find($categoryId);
        $bookCategories = $category->bookcategories;
        $books = $bookCategories->map(function ($bookCategory) {
            return $bookCategory->book;
        });
        return view('category', ['category' => $category, 'books' => $books]);
    }
}

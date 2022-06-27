<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function GetList() {
        $categories = new Category();
        return view('writeblog', ['data' => $categories->all()]);
    }
}

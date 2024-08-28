<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class LoaiController extends Controller
{
    public function categories(){
        return CategoryResource::collection(Category::all());
    }
}

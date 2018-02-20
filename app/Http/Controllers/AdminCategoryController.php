<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 19.02.2018
 * Time: 21:00
 */

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function createCategory(Request $request) {



        $this->validate($request, [
            'category' => 'required'
        ]);

        $category = Category::create([
            'name' => $request->input('category'),
        ]);

        return redirect()->back()->with('message', 'Категория добавлена');
    }
}
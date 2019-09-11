<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request){
        Category::saveCategoryInfo($request);
        return redirect('/category/add-category')->with('message', 'Category Data Save successfully');

    }
    public function manageCategory(){
        return view('admin.category.manage-category', [
            'categories' => Category::all()
        ]);
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        Category::updateCategoryInfo($request);
        return redirect('category/manage-category')->with('message', 'Category Update Successfully');
    }
    public function deleteCategory(Request $request){
        $blog = Blog::where('category_id', $request->id)->first();
        if ($blog){
            return redirect('category/manage-category')->with('message', 'Sorry this category already have in the Blog section you can not delete this!!');
        }else{
            $category = Category::find($request->id);
            $category->delete();
            return redirect('category/manage-category')->with('message', 'delete successfully');
        }


    }
    public function deleteTest(){

    }
}

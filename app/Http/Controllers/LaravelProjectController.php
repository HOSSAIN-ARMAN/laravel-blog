<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class LaravelProjectController extends Controller
{
    public function home(){
//        ->orderBy('id', 'desc')->take(2)
        $blogs = Blog::where('publication_status', 1)->get();

        return view('front.home.home',[
            'blogs' => $blogs,
            'categories' => Category::where('publication_status', 1)->get(),
            'sliders'     => Slider::all()
        ]);
    }
    public function categoryPages($id){
        return view('front.category.category-page',[
            'categories'  => Category::where('publication_status', 1)->get(),
            'blogs'       => Blog::where('category_id', $id)->where('publication_status', 1)->get()
        ]);
    }
    public function blogDetails($id){
        return view('front.blog-details.blog-details',[
            'categories' => Category::where('publication_status', 1)->get(),
            'blog'       => Blog::find($id)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }
    public function newBlogAdd(Request $request){
        Blog::newBlogAddByModel($request);
        return redirect('/blog/manage-blog')->with('message', 'Blog Data insert Successfully');
    }
    public function managBlog(){
        return view('admin.blog.manage-blog',[
            'blogs' =>  Blog::managBlogByModel()
        ]);
    }
    public function editBlog($id){
        return view('admin.blog.edit-blog',[
            'categories' => Category::where('publication_status', 1)->get(),
            'blog'       => Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request){
        Blog::updateBlogByModel($request);
        return redirect('/blog/manage-blog')->with('message', 'Blog data save successfully');
    }
    public function deleteBlog(Request $request){
        $blog = Blog::find($request->id);
        unlink($blog->blog_image);
        $blog->delete();
        return redirect('/blog/manage-blog')->with('message', 'delete data successfully');
    }


}

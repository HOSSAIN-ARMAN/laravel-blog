<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $fillable = ['category_id', 'blog_title', 'blog_short_description', 'blog_long_description', 'blog_image', 'publication_status'];

    public static function newBlogAddByModel($request){
        $blogImage     = $request->file('blog_image');
        $blog = new Blog();
        $blog->category_id                = $request->category_id;
        $blog->blog_title                 = $request->blog_title;
        $blog->blog_short_description     = $request->blog_short_description;
        $blog->blog_long_description      = $request->blog_long_description;
        $blog->blog_image                 = $blog->imageUpload($blogImage);
        $blog->publication_status         = $request->publication_status;
        $blog->save();
    }

    public static function managBlogByModel(){
        $blogs = DB::table('blogs')
                        ->join('categories', 'blogs.category_id', '=', 'categories.id' )
                        ->select('blogs.*', 'categories.category_name')
                        ->get();
        return $blogs;
    }
    private static function imageUpload($blogImage){
        $imageName = $blogImage->getClientOriginalName();
        $directory = "img-folder/";
        $blogImage->move($directory, $imageName);
        return $directory.$imageName;

    }
    public static function updateBlogByModel($request){
        $blogImage = $request->file('blog_image');
        $blog = Blog::find($request->id);
        $blog->category_id                = $request->category_id;
        $blog->blog_title                 = $request->blog_title;
        $blog->blog_short_description     = $request->blog_short_description;
        $blog->blog_long_description      = $request->blog_long_description;
        if ($blogImage){
            unlink($blog->blog_image);
            $imageUrl = $blog->imageUpload($blogImage);
            $blog->blog_image             = $imageUrl;
        }
        $blog->publication_status         = $request->publication_status;
        $blog->save();
    }
}

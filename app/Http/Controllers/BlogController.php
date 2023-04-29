<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        //
        $blogs = Blog::latest()->get();
        return view('blogs')->with('blogs', $blogs);
    }

    public function display($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function addBlog(Request $request)
    {
        $file =  $request->file('image');
        $fileName = time() . '' . $file->getClientOriginalName();
        $filePath = $file->storeAs('images', $fileName, 'public');

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->heading = $request->heading;
        $blog->textBody = $request->content;
        $blog->image =  $filePath;

        $blog->save();

        return response()->json(['res' => 'created']);
    }
}

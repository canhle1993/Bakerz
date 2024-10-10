<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Lấy giá trị tìm kiếm từ request
        $search = $request->query('search');
    
        // Lấy danh sách blog có tìm kiếm và sắp xếp theo ngày đăng mới nhất
             $blogs = Blog::where('isdelete', 0) // Chỉ lấy những chef chưa bị xóa

            ->when($search, function ($query, $search) {
                return $query->where('blog_name', 'like', '%' . $search . '%');
            })
            ->orderBy('posted_date', 'desc') // Sắp xếp theo ngày đăng mới nhất
            ->paginate(5); // Phân trang
    
        return view('admin.blog.index', compact('blogs'));
    }
    

    public function store(Request $request)
    {
        // Validate and store the blog
        $request->validate([
            'blog_name' => 'required|max:255',
            'title1' => 'required',
            'title2' => 'nullable',
            'content1' => 'required',
            'content2' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->user_id = Auth::id(); // Assign logged-in user
        $blog->blog_name = $request->blog_name;
        $blog->title1 = $request->title1;
        $blog->title2 = $request->title2;
        $blog->content1 = $request->content1;
        $blog->content2 = $request->content2;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $blog->image = $path;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog added successfully!');
    }

    public function edit($id)
    {
        // Retrieve the specific blog entry
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the blog
        $request->validate([
            'blog_name' => 'required|max:255',
            'title1' => 'required',
            'title2' => 'nullable',
            'content1' => 'required',
            'content2' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->blog_name = $request->blog_name;
        $blog->title1 = $request->title1;
        $blog->title2 = $request->title2;
        $blog->content1 = $request->content1;
        $blog->content2 = $request->content2;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $blog->image = $path;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        // Find and delete the blog entry
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully!');
    }
    
    public function showBlog()
    {
        // Lấy danh sách các blog từ database
        $blogs = Blog::paginate(6); // Số bài blog mỗi trang (6 là ví dụ)
        
        // Trả về view và truyền biến $blogs
        return view('client.blog.blog', compact('blogs'));
    }

    public function show($id)
    {
        // Lấy thông tin chi tiết của blog theo ID
        $blog = Blog::with('user')->findOrFail($id);
        
        // Trả về view và truyền dữ liệu blog
        return view('client.blog.blog-pd', compact('blog'));
    }


}

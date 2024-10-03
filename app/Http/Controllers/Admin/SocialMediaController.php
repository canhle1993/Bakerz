<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Carbon\Carbon;

class SocialMediaController extends Controller
{
    // Display the list of Social Media links
    public function index(Request $request)
{
    // Lấy từ khóa tìm kiếm từ request
    $search = $request->input('search');

    // Nếu có từ khóa tìm kiếm, lọc dữ liệu dựa trên từ khóa
    if ($search) {
        $socialMedia = SocialMedia::where('isdelete', 0)
            ->where('name', 'LIKE', '%' . $search . '%') // Tìm kiếm theo tên
            ->paginate(5); // Phân trang với 5 bản ghi mỗi trang
    } else {
        $socialMedia = SocialMedia::where('isdelete', 0)
            ->paginate(5); // Phân trang với 5 bản ghi mỗi trang
    }

    // Trả về view cùng với dữ liệu SocialMedia và từ khóa tìm kiếm (nếu có)
    return view('admin.socialmedia', compact('socialMedia', 'search'));
}


    // Store a new Social Media link
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('socialmedia_images', 'public');

        SocialMedia::create([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'image' => $imagePath,  // Save image path
            'CreatedDate' => Carbon::now(),
            'isdelete' => 0
        ]);

        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media link added successfully!');
    }

    // Update an existing Social Media link
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,webp',
        ]);

        $socialMedia = SocialMedia::findOrFail($id);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('socialmedia_images', 'public');
            $socialMedia->image = $imagePath;
        }

        $socialMedia->name = $request->input('name');
        $socialMedia->link = $request->input('link');
        $socialMedia->save();

        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media updated successfully.');
    }

    // Soft delete a Social Media link
    public function destroy($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();

        return redirect()->route('admin.socialmedia.index')->with('success', 'Social Media deleted successfully.');
    }
}

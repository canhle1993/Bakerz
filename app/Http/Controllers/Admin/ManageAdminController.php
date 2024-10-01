<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ManageAdminController extends Controller
{
    // Hiển thị danh sách admin
    public function index()
    {
        $admins = User::where('role_id', '=', 2)->whereNull('isdelete')->paginate(5);

        return view('admin.manage-admin', compact('admins'));
    }

    // Hiển thị form thêm admin
    public function create()
    {
        return view('admin.manage-admin-create');
    }

    // Lưu admin mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'avatar_url' => 'nullable|url'
        ]);

        $avatarName = null;

        // Xử lý upload avatar từ máy cục bộ
        if ($request->hasFile('avatar')) {
            $avatarName = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('storage/avatars'), $avatarName);
        }

        // Nếu không upload file, kiểm tra URL ảnh từ bên ngoài
        if (!$avatarName && $request->input('avatar_url')) {
            $avatarName = $request->input('avatar_url');
        }

        // Tạo mới admin
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => 2, // Role admin
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'avatar' => $avatarName,
            'isdelete' => null
        ]);

        return redirect()->route('manage-admin')->with('success', 'Admin added successfully');
    }

    // Hiển thị form chỉnh sửa admin
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.manage-admin-edit', compact('admin'));
    }

    // Cập nhật thông tin admin
    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,' . $admin->user_id . ',user_id',
            'password' => 'nullable|string|min:6',
            'phone' => 'nullable|string',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'avatar_url' => 'nullable|url'
        ]);

        $avatarName = $admin->avatar; // Giữ avatar cũ nếu không thay đổi

        // Xử lý avatar mới từ máy cục bộ
        if ($request->hasFile('avatar')) {
            if ($admin->avatar && file_exists(public_path('storage/avatars/' . $admin->avatar))) {
                unlink(public_path('storage/avatars/' . $admin->avatar));
            }
            $avatarName = $request->file('avatar')->hashName();
            $request->file('avatar')->storeAs('avatars', $avatarName, 'public');
        }

        // Nếu không có file upload nhưng có URL mới
        if (!$request->hasFile('avatar') && $request->input('avatar_url')) {
            $avatarName = $request->input('avatar_url');
        }

        // Cập nhật admin
        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password') ? bcrypt($request->input('password')) : $admin->password,
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'avatar' => $avatarName,
            'role_id' => 2, // Giữ nguyên role_id là admin
            'isdelete' => null
        ]);

        return redirect()->route('manage-admin')->with('success', 'Admin updated successfully');
    }

    // Xóa admin (đánh dấu isdelete)
    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->update(['isdelete' => 1]);

        return redirect()->route('manage-admin')->with('success', 'Admin deleted successfully');
    }

    // Hạ cấp admin xuống client
    public function lowerToClient($id)
    {
        $admin = User::findOrFail($id);
        $admin->update([
            'role_id' => 1 // Hạ quyền xuống client
        ]);

        return redirect()->route('manage-admin')->with('success', 'Admin role lowered to client successfully');
    }

    public function Upgradetoadmin($id)
    {
        $client = User::findOrFail($id);
        $client->update([
            'role_id' => 2 // Nâng quyền lên Admin
        ]);
        return redirect()->route('manage-admin')->with('success', 'Client role updated to Admin successfully');
    }


    // Nâng quyền admin lên supper
        public function upgradeToSuper($id)
        {
            $admin = User::findOrFail($id);
            $admin->update([
                'role_id' => 3
            ]);

            return redirect()->route('manage-admin')->with('success', 'Admin role upgraded to Supper successfully');
}

        // Phục hồi danh mục từ danh sách bị xóa (isdelete = 1)
            public function restoreCategory($id)
            {
                $category = Catalog::findOrFail($id);
                $category->update(['isdelete' => null]);

                return redirect()->route('manage-blacklist')->with('success', 'Category restored successfully');
}

                public function restoreProduct($id)
                {
                    $product = Product::findOrFail($id);
                    $product->update(['isdelete' => null]);

                    return redirect()->route('manage-blacklist')->with('success', 'Product restored successfully');
                }

                // Phục hồi người dùng từ blacklist (isdelete = 1)
                    public function restoreUser($id)
                    {
                        $user = User::findOrFail($id);
                        $user->update(['isdelete' => null]);

                        return redirect()->route('manage-blacklist')->with('success', 'User restored successfully');
                    }



                public function blacklist()
                {
                  // Truy vấn người dùng có isdelete = 1 (bị blacklist)
                    $blacklistedUsers = User::where('isdelete', 1)->paginate(5);

                    // Truy vấn danh mục có isdelete = 1 (bị xóa)
                    $deletedCategories = Category::where('isdelete', 1)->paginate(5);

                    // Truy vấn sản phẩm có isdelete = 1 (bị xóa)
                    $deletedProducts = Product::where('isdelete', 1)->paginate(5);

                    // Truyền cả 3 biến vào view
                    return view('admin.manage-blacklist', compact('blacklistedUsers', 'deletedCategories', 'deletedProducts'));
}


public function delete($id)
{
     // Xóa tất cả các bản ghi liên quan trong bảng orderdetails trước
     DB::table('orderdetails')->where('product_id', $id)->delete();

         // Xóa tất cả các bản ghi liên quan trong bảng discountproduct
    DB::table('discountproduct')->where('product_id', $id)->delete();

      // Xóa các bản ghi liên quan trong bảng link_product_heathy
    DB::table('link_product_heathy')->where('product_id', $id)->delete();

    // Xóa các bản ghi liên quan trong bảng linkcatalogproduct
    DB::table('linkcatalogproduct')->where('product_id', $id)->delete();

    // Sau đó xóa sản phẩm khỏi bảng product
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('manage-blacklist')->with('success', 'Product deleted permanently');
}
}

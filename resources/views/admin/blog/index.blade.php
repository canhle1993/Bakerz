@extends('admin.dashboard')
<style>
    .btn-secondary {
       background-color: #6c757d !important;
       color: white !important;
       font-weight: bold !important;
       padding: 10px 20px !important;
       border-radius: 5px !important;
       border: none !important;
       transition: all 0.3s ease !important;
   }

   .table {
       border-collapse: separate !important;
       border-spacing: 0 15px !important;
       background-color: #fff !important;
       box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
       border-radius: 10px !important;
   }

   .table thead th {
       background-color: #BC8157 !important;
       color: white !important;
       font-weight: bold !important;
       padding: 12px 15px !important;
       text-align: center!important;
   }

   .table tbody tr {
       background-color: #f9f9f9!important;
       transition: background-color 0.3s ease !important;
   }

   .table tbody tr:hover {
       background-color: #e9ecef!important;
   }

   .table td {
       padding: 12px 15px!important;
       text-align: center!important;
   }
   .btn:hover {
       background-color: #0056b3 !important;
   }
</style>

@section('blog_content')
<div class="container mt-5">
    <h1 style="color: #BC8157;
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        margin: 30px 0;
        text-align: center;
        line-height: 1.2;
        padding: 15px;
        border: 4px dashed #BC8157;
        background-color: rgba(230, 247, 255, 0.7);
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Thêm đổ bóng cho toàn bộ box */">
     Blog Management
    </h1>

   <!-- Form tìm kiếm blog theo tên -->
<div class="row mb-4">
    <div class="col-md-8 offset-md-2">
        <form method="GET" action="{{ route('blog.index') }}" class="input-group">
            <input type="text" name="search" class="form-control bg-white border-0 ps-3" placeholder="Search Blog Name" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
            <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="col-md-2 text-end">
        <a href="{{ route('blog.index') }}" class="btn btn-secondary">
            Reset
        </a>
    </div>
</div>


    <!-- Button to open the modal to add blog -->
    <button class="btn mb-3" data-bs-toggle="modal" data-bs-target="#addBlogModal" style="background-color: #0fa7bf; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
        Add Blog
    </button>


    <!-- Blog List -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Blog Name</th>
                <th>User</th>
                <th>Posted Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td><img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100"></td>
                <td>{{ $blog->blog_name }}</td>
                <td>{{ $blog->user->name }}</td>
                <td>{{ \Carbon\Carbon::parse($blog->posted_date)->format('d-m-Y H:i') }}</td>
                <td>
                    <!-- View Blog Button -->
                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewBlogModal{{ $blog->blog_id }}">View</button>

                    <!-- Edit Blog Button -->
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editBlogModal{{ $blog->blog_id }}">Edit</button>

                    <!-- Delete Blog Button -->
                    <form action="{{ route('blog.delete', $blog->blog_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- View Blog Modal -->
            <div class="modal fade" id="viewBlogModal{{ $blog->blog_id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Blog</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Displaying blog details -->
                            <div class="mb-3">
                                <label for="viewBlogName">Blog Name:</label>
                                <p>{{ $blog->blog_name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewPostedDate">Posted Date:</label>
                                <p>{{ \Carbon\Carbon::parse($blog->posted_date)->format('d-m-Y H:i') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewTitle1">Title 1:</label>
                                <p>{{ $blog->title1 }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewTitle2">Title 2:</label>
                                <p>{{ $blog->title2 }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewContent1">Content 1:</label>
                                <p>{!! nl2br(e($blog->content1)) !!}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewContent2">Content 2:</label>
                                <p>{!! nl2br(e($blog->content2)) !!}</p>
                            </div>
                            <div class="mb-3">
                                <label for="viewImage">Blog Image:</label>
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Blog Modal -->
            <div class="modal fade" id="editBlogModal{{ $blog->blog_id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('blog.update', $blog->blog_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Sử dụng PUT để cập nhật blog -->
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Blog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form fields for editing the blog -->
                                <div class="mb-3">
                                    <label for="blog_name">Blog Name</label>
                                    <input type="text" class="form-control" id="blog_name" name="blog_name" value="{{ $blog->blog_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title1">Title 1</label>
                                    <input type="text" class="form-control" id="title1" name="title1" value="{{ $blog->title1 }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title2">Title 2</label>
                                    <input type="text" class="form-control" id="title2" name="title2" value="{{ $blog->title2 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="content1">Content 1</label>
                                    <textarea class="form-control" id="content1" name="content1" rows="3" required>{{ $blog->content1 }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="content2">Content 2</label>
                                    <textarea class="form-control" id="content2" name="content2" rows="3">{{ $blog->content2 }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image">Blog Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center">
        {{ $blogs->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
    </div>
    <!-- Add Blog Modal -->
    <div class="modal fade" id="addBlogModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form fields for adding a blog -->
                        <div class="mb-3">
                            <label for="blog_name">Blog Name</label>
                            <input type="text" name="blog_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="title1">Title 1</label>
                            <input type="text" name="title1" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="title2">Title 2</label>
                            <input type="text" name="title2" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="content1">Content 1</label>
                            <textarea name="content1" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content2">Content 2</label>
                            <textarea name="content2" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn" style="background-color: #ffc107; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
                            Add Blog
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

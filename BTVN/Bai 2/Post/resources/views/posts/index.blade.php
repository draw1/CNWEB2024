<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <body class="bg-light">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Danh sách bài viết</h1>

            <!-- Nút tạo bài viết mới -->
            <div class="mb-3 text-end">
                <a href="{{ route('posts.create') }}" class="btn btn-success">+ Tạo bài viết mới</a>
            </div>

            <!-- Bảng danh sách bài viết -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 50) }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Nếu không có bài viết -->
                    @if($posts->isEmpty())
                    <p class="text-center text-muted">Không có bài viết nào.</p>
                    @endif
                </div>
            </div>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
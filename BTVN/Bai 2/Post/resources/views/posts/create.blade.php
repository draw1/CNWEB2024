<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo bài viết mới</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body class="bg-light">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Tạo bài viết mới</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <!-- Tiêu đề -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề" required>
                        </div>
                        <!-- Nội dung -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Nội dung</label>
                            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Nhập nội dung" required></textarea>
                        </div>
                        <!-- Nút Lưu -->
                        <button type="submit" class="btn btn-primary">Lưu bài viết</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Hủy</a>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
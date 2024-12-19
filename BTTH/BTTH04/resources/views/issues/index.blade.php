@extends('layouts.app')

@section('title', 'Danh sách vấn đề')

@section('content')
<h1 class="mb-4">Danh sách vấn đề</h1>

<a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">Thêm vấn đề mới</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên máy tính</th>
            <th>Người báo cáo</th>
            <th>Thời gian</th>
            <th>Mức độ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($issues as $issue)
        <tr>
            <td>{{ $issue->id }}</td>
            <td>{{ $issue->computer->computer_name }}</td>
            <td>{{ $issue->reported_by }}</td>
            <td>{{ $issue->reported_date }}</td>
            <td>
                <span class="badge bg-{{ $issue->urgency == 'High' ? 'danger' : ($issue->urgency == 'Medium' ? 'warning' : 'success') }}">
                    {{ $issue->urgency }}
                </span>
            </td>
            <td>{{ $issue->status }}</td>
            <td>
                <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Phân trang -->
{{ $issues->links() }}
@endsection
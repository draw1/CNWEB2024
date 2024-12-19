@extends('layouts.app')

@section('title', 'Thêm vấn đề mới')

@section('content')
<h1>Thêm vấn đề mới</h1>

<form action="{{ route('issues.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="computer_id" class="form-label">Tên máy tính</label>
        <select name="computer_id" id="computer_id" class="form-select" required>
            @foreach ($computers as $computer)
            <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="reported_by" class="form-label">Người báo cáo</label>
        <input type="text" name="reported_by" id="reported_by" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="urgency" class="form-label">Mức độ sự cố</label>
        <select name="urgency" id="urgency" class="form-select" required>
            <option value="Low">Thấp</option>
            <option value="Medium">Trung bình</option>
            <option value="High">Cao</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Lưu</button>
    <a href="{{ route('issues.index') }}" class="btn btn-secondary">Hủy</a>
</form>
@endsection
@extends('layouts.app')

@section('title', 'Cập nhật vấn đề')

@section('content')
<h1>Cập nhật vấn đề</h1>

<form action="{{ route('issues.update', $issue->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="computer_id" class="form-label">Tên máy tính</label>
        <select name="computer_id" id="computer_id" class="form-select" required>
            @foreach ($computers as $computer)
            <option value="{{ $computer->id }}" {{ $issue->computer_id == $computer->id ? 'selected' : '' }}>
                {{ $computer->computer_name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="reported_by" class="form-label">Người báo cáo</label>
        <input type="text" name="reported_by" id="reported_by" class="form-control" value="{{ $issue->reported_by }}" required>
    </div>
    <div class="mb-3">
        <label for="urgency" class="form-label">Mức độ sự cố</label>
        <select name="urgency" id="urgency" class="form-select" required>
            <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Thấp</option>
            <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Trung bình</option>
            <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>Cao</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea name="description" id="description" class="form-control" rows="4" required>{{ $issue->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
    <a href="{{ route('issues.index') }}" class="btn btn-secondary">Hủy</a>
</form>
@endsection
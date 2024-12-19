<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ComputerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('issues', IssueController::class);

// Hiển thị form thêm mới
Route::get('/computers/create', [ComputerController::class, 'create'])->name('computers.create');

// Xử lý lưu dữ liệu thêm mới
Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');

// Hiển thị form cập nhật
Route::get('/computers/{id}/edit', [ComputerController::class, 'edit'])->name('computers.edit');

// Xử lý cập nhật dữ liệu
Route::put('/computers/{id}', [ComputerController::class, 'update'])->name('computers.update');

// Route xóa máy tính
Route::delete('/computers/{id}', [ComputerController::class, 'destroy'])->name('computers.destroy');

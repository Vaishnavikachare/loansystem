<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanRequestController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::POST('/loan-request', [LoanRequestController::class, 'store'])->name('loan.request');
Route::get('/home', [LoanRequestController::class, 'index'])->name('home');

Route::get('/loan-requests', [AdminController::class, 'list'])->name('loanRequests');
Route::get('/loan-requests/{id}/edit', [AdminController::class, 'edit'])->name('loanRequests.edit');
Route::put('/loan-requests/{id}', [AdminController::class, 'update'])->name('loanRequests.update');
Route::delete('/loan-requests/{id}', [AdminController::class, 'destroy'])->name('loanRequests.destroy');

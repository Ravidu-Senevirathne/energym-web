<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/user', function (Request $request) {
    try {
        return $request->user();
    } catch (\Exception $e) {
        // Log the exception
        \Log::error('Exception occurred while retrieving user information: ' . $e->getMessage());
        // Return an error response
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
})->middleware('auth:sanctum');


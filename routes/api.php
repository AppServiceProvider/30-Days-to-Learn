<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






Route::get('/posts', function() {
    // Eager load the 'tags' relationship to fetch related tags with each post
    $posts = Post::with('tags')->get();  // Get all posts with their related tags

    // Return the posts as a JSON response
    return response()->json($posts);
});


<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    /**
     * Display the login view.
     */
    public function index(Request $request): Response
    {
        $currentPage = $request->get('page', '1');
        $cacheKey = 'posts_list_page_'.$currentPage;

        $posts = Cache::remember($cacheKey, 3600, function () {
            return Post::select(['ID', 'post_title', 'post_name'])
                ->published()
                ->latest()
                ->paginate(25);
        });

        return Inertia::render('Post/List', [
            'title' => 'View Post',
            'posts' => $posts,
        ]);
    }

    /**
     * Display the login view.
     */
    public function view(Post $post): Response
    {
        return Inertia::render('Post/View', [
            'title' => 'View Post - '.$post->title,
            'post' => $post,
        ]);
    }
}

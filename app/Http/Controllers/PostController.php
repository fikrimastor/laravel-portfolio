<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    /**
     * Display the login view.
     */
    public function index(): Response
    {
        $posts = Post::select(['ID', 'post_title', 'post_name'])->published()->latest()->paginate(25);
        return Inertia::render('Post/List', [
            'title' => 'View Post',
            'posts' => $posts,
//            'posts' => Post::select(['ID', 'post_title', 'post_name'])->published()->latest()->paginate(25),
//            'list' => $posts,
//            'posts' => $posts->transform(function (Post $post, int $key) {
//                return [
//                    'id' => $post->ID,
//                    'title' => $post->title,
//                ];
//            }),
        ]);
    }

    /**
     * Display the login view.
     */
    public function view(Post $post): Response
    {
        return Inertia::render('Post/View', [
            'title' => 'View Post - ' . $post->title,
            'post' => $post,
        ]);
    }
}

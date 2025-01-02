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
    public function view(): Response
    {
        return Inertia::render('Post/View', [
            'title' => 'View Post',
            'post' => Post::published()->latest()->first(),
        ]);
    }
}

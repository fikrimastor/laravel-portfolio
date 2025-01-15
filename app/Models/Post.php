<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Corcel
{
    public string $title;

    public string $post_title;

    protected $connection = 'wordpress';

    protected $postType = 'post';

    protected $casts = [
        'content' => 'array',
    ];

    protected $appends = [
        'title',
        'slug',
        'content',
        'image',
        'keywords',
        'view_url',
    ];

    protected function viewUrl(): Attribute
    {
        return Attribute::get(fn () => route('blog.view', $this->slug));
    }
}

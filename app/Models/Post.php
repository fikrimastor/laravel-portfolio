<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class Post extends Corcel
{
    protected $connection = 'wordpress';
    protected $postType = 'post';

    protected $casts = [
        'content' => 'array',
    ];
}

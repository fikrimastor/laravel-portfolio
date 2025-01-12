<?php

return [
    'facebook' => env('PROFILE_FACEBOOK', '#'),
    'linkedin' => env('PROFILE_LINKEDIN', '#'),
    'instagram' => env('PROFILE_INSTAGRAM', '#'),
    'github' => env('PROFILE_GITHUB', '#'),
    'twitter' => env('PROFILE_TWITTER', '#'),
    'youtube' => env('PROFILE_YOUTUBE', '#'),
    'degree' => env('PROFILE_DEGREE', 'BSc Computer Science'),
    'university' => env('PROFILE_UNIVERSITY', 'University of the West of England'),
    'location' => env('PROFILE_LOCATION', 'Bristol, UK'),

    'work_experience' => [
        1 => [
            'title' => env('WORK_EXP_TITLE_1', 'Software Engineer'),
            'company' => 'Company A',
            'website' => '#',
            'date' => '2019 - 2021',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies.'
        ],
        2 => [
            'title' => 'Software Engineer',
            'company' => 'Company B',
            'website' => '#',
            'date' => '2017 - 2019',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies.'
        ],
        3 => [
            'title' => 'Software Engineer',
            'company' => 'Company C',
            'website' => '#',
            'date' => '2015 - 2017',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies. Nullam nec nunc nec libero ultricies ultricies.'
        ],
    ]
];
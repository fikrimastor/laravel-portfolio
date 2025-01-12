<?php

namespace App\Http\Middleware;

use App\Models\Experience;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            'profile' => [
                'facebook' => config('profile.facebook'),
                'twitter' => config('profile.twitter'),
                'instagram' => config('profile.instagram'),
                'linkedin' => config('profile.linkedin'),
                'github' => config('profile.github'),
                'youtube' => config('profile.youtube'),
                'experiences' => cache()->remember('experiences', 60 * 60, fn () => Experience::select(Experience::CACHE)->get()),
            ],
        ];
    }
}

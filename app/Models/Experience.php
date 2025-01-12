<?php

namespace App\Models;

use App\Enums\ExperienceTypeEnum;
use CleaniqueCoders\Traitify\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceFactory> */
    use HasFactory, InteractsWithUuid;

    protected $guarded = [
        'id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'start_at' => 'datetime',
            'end_at' => 'datetime',
            'is_current' => 'boolean',
            'type' => ExperienceTypeEnum::class,
        ];
    }

    protected $appends = [
        'service_duration',
    ];

    public const CACHE = [
        'entity_name',
        'type',
        'entity_website_url',
        'entity_logo_url',
        'start_at',
        'end_at',
        'role',
        'responsibility',
        'is_active',
    ];

    protected function serviceDuration(): Attribute
    {
        return new Attribute(fn ($value) => $this->start_at?->format('M Y').' - '.($this->is_current ? 'Current' : $this->end_at?->format('M Y')));
    }
}

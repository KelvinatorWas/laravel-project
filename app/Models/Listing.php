<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'title',
        'location',
        'email',
        'website',
        'tags',
        'description',
        'logo',
    ];


    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $requestTag = request('tag');
            $query->where('tags', 'like', "%{$requestTag}%");
        }

        if ($filters['search'] ?? false) {
            $requestSearch = request('search');
            $query->where('title', 'like', "%{$requestSearch}%")
                ->orWhere('description', 'like', "%{$requestSearch}%")
                ->orWhere('tags', 'like', "%{$requestSearch}%");
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'title',
        'description'
    ];

    protected $guarded = [
        'id',
        'updated_at',
        'created_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'username',
        'password'
    ];

    protected $guarded = [
        'id',
        'updated_at',
        'created_at'
    ];
}

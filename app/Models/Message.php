<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['content', 'role'];

    protected $casts = [
        'role' => Role::class,
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}

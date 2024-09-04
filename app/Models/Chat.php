<?php

namespace App\Models;

use App\Enums\AiModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['title', 'ai_model'];

    protected $casts = [
        'ai_model' => AiModel::class,
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}

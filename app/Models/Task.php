<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tasks';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'date'
    ];


    /**
     * Отношения с вложением
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class, 'task_id', 'id');

    }

    /**
     * Отношения с пользователем
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

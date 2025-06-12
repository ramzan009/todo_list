<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'attachments';

    protected $fillable = [
        'task_id',
        'user_id',
        'file_path',
        'file_name',
        'file_type',
    ];

    /**
     * Отношение списком
     */
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    /**
     * Отношения с пользователем
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

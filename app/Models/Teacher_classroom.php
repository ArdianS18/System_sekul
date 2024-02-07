<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher_classroom extends Model
{
    use HasFactory;

    /**
     * Get the teacher_subject that owns the teacher_classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher_subject(): BelongsTo
    {
        return $this->belongsTo(Teacher_subject::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the classroom that owns the teacher_classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, 'foreign_key', 'other_key');
    }
}

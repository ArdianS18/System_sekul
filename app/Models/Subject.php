<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    /**
     * Get the teacher that owns the subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the classrooms for the subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student_classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, 'foreign_key', 'local_key');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher_subject extends Model
{
    use HasFactory;

    /**
     * Get the student that owns the Teacher_subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'foreign_key', 'other_key');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Get all of the teacher_classrooma for the Teacher_subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher_classrooma(): HasMany
    {
        return $this->hasMany(Teacher_classroom::class, 'foreign_key', 'local_key');
    }
}

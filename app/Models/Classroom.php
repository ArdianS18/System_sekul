<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classroom extends Model
{
    use HasFactory;

    /**
     * Get the teacher associated with the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the teacher_class that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher_class(): BelongsTo
    {
        return $this->belongsTo(Teacher_class::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the student_classrooms for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student_classrooms(): HasMany
    {
        return $this->hasMany(Student_classroom::class, 'foreign_key', 'local_key');
    }

    /**
     * Get all of the school_year for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function school_year(): HasMany
    {
        return $this->hasMany(School_year::class, 'foreign_key', 'local_key');
    }
}

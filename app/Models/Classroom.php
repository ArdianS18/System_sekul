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
        return $this->belongsTo(Teacher::class);
    }


    /**
     * Get all of the school_year for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function school_year(): BelongsTo
    {
        return $this->belongsTo(School_year::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the student_classroom that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student_classrooms(): HasMany
    {
        return $this->hasMany(Student_classroom::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the teacher_classrooms for the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher_classrooms(): HasMany
    {
        return $this->hasMany(Teacher_classroom::class, 'foreign_key', 'local_key');
    }
}

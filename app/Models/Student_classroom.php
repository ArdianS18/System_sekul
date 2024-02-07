<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student_classroom extends Model
{
    use HasFactory;


    /**
     * Get the student that owns the Student_classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the classroom that owns the Student_classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the subject for the Student_classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class, 'foreign_key', 'local_key');
    }
}

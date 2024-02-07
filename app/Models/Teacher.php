<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;

    /**
     * Get all of the teacher_subjects for the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher_subjects(): HasMany
    {
        return $this->hasMany(Teacher_subject::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the classroom associated with the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroom(): HasMany
    {
        return $this->hasMany(Classroom::class, 'foreign_key', 'local_key');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    /**
     * Get all of the classrooms for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student_classrooms(): HasMany
    {
        return $this->hasMany(Classroom::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the classroom associated with the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student_classroom(): HasOne
    {
        return $this->hasOne(Classroom::class, 'foreign_key', 'local_key');
    }
}

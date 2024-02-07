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
     * Get all of the teacher_subjects for the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher_subjects(): HasMany
    {
        return $this->hasMany(Teacher_subject::class, 'foreign_key', 'local_key');
    }
}

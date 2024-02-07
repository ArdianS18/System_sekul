<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher_class extends Model
{
    use HasFactory;

    /**
     * Get the classroom associated with the Teacher_class
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class, 'foreign_key', 'local_key');
    }
}

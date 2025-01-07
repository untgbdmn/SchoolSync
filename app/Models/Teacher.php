<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $table = "_teachers";
    protected $primaryKey = "teacher_id";
    protected $guarded = [];

    public function grades(): HasMany {
        return $this->hasMany(Grade::class, 'grade_id', 'grade_id');
    }
}

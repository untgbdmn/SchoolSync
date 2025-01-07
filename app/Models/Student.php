<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    protected $table = "_students";
    protected $primaryKey = "student_id";
    protected $guarded = [];

    public function grade(): HasOne {
        return $this->hasOne(Grade::class,"grade_id","grade_id");
    }
}

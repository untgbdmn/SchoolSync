<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = "_grades";
    protected $primaryKey = "grade_id";
    protected $guarded = [];
}

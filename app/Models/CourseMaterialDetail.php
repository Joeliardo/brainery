<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterialDetail extends Model
{
    use HasFactory;
    protected $table = "course_materials_details";
    protected $guarded = [];
}

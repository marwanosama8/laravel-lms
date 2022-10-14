<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property int $teacher_id
 * @property int $course_id
 * @property boolean $week_day
 * @property string $start_at
 * @property string $open_in
 */
class Classes extends Model
{
    use  HasFactory;
    protected $table = 'classes';
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'teacher_id', 'course_id', 'week_day', 'start_at', 'open_in'];
}

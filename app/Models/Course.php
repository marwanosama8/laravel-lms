<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $grade_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $start_at
 */
class Course extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['name', 'grade_id', 'created_at', 'updated_at', 'start_at'];
}

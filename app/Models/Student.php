<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $phone
 * @property int $age
 * @property string $email
 * @property string $grade_id
 * @property int $parent_id
 * @property string $code
 * @property string $admin_id
 * @property string $member_at
 * @property integer $country_id
 * @property integer $city_id
 * @property string $school_name
 */
class Student extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'phone', 'age', 'email', 'grade_id', 'parent_id', 'code', 'admin_id', 'member_at', 'country_id', 'city_id', 'school_name'];
}

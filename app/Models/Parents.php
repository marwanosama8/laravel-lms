<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property integer $age
 * @property string $phone
 * @property integer $country_id
 * @property integer $city_id
 * @property string $email
 * @property string $member_at
 */
class Parents extends Model
{
    use HasFactory;
    protected $table = 'parents';
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'age', 'phone', 'country_id', 'city_id', 'email', 'member_at'];
}

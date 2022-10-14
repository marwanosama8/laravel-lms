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
 * @property string $email
 * @property string $salary
 * @property string $member_at
 * @property string $code
 */
class Admin extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'phone', 'email', 'salary', 'member_at', 'code'];
}

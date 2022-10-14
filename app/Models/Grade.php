<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property boolean $active
 */
class Grade extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'active'];
}

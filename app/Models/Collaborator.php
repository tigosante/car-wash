<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $age
 * @property string $cpf
 * @property string $registration
 * @property string $created_at
 * @property string $updated_at
 */
class Collaborator extends Model
{
    protected $table = "collaborator";
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'age', 'cpf', 'registration', 'created_at', 'updated_at'];
}

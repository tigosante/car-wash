<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $age
 * @property string $cpf
 * @property string $cnpj
 * @property string $rg
 * @property string $doc_type
 * @property string $address
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model
{
    protected $table = "user";

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'age', 'cpf', 'cnpj', 'rg', 'doc_type', 'address', 'created_at', 'updated_at'];

    public static function destory()
    {
        $deletes = true;

        foreach (User::all() as $user) {
            $deletes = $deletes && $user->delete();
        }

        return $deletes;
    }
}

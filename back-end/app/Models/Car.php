<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $board
 * @property string $model
 * @property string $mark
 * @property string $color
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Car extends Model
{
    protected $table = "car";

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'board', 'model', 'mark', 'color', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

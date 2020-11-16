<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $car_id
 * @property integer $service_id
 * @property string $comments
 * @property string $created_at
 * @property Car $car
 * @property Service $service
 */
class TypeService extends Model
{
    protected $table = "type_service";

    /**
     * @var array
     */
    protected $fillable = ['car_id', 'service_id', 'comments', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}

<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Family extends Model
{
    use Authenticatable, Authorizable, \Illuminate\Database\Eloquent\SoftDeletes, \Kalnoy\Nestedset\NodeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'relationship', 'birth_date', 'parent_id',
    ];


    /**
     * Relation for parent id.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /*public function parent()
    {
        return $this->belongsTo(self::class);
    }*/


    public static function resetActionsPerformed()
    {
        static::$actionsPerformed = 0;
    }
}

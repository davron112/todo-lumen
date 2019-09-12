<?php

namespace App\Models;

use App\Models\Traits\TableName;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Family extends Model
{
    use TableName, Authenticatable, Authorizable, \Illuminate\Database\Eloquent\SoftDeletes, \Kalnoy\Nestedset\NodeTrait;

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
    public function parent()
    {
        return $this->belongsTo(self::class);
    }


    public static function resetActionsPerformed()
    {
        static::$actionsPerformed = 0;
    }


    /**
     * Set model validation rules.
     *
     * @return array
     */
    public function validate()
    {
        return [
            'first_name'   => 'required|string',
            'last_name'    => 'string',
            'relationship' => 'string',
            'birth_date'   => 'date',
        ];
    }
}

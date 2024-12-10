<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $custom_screen_id
 * @property string $custom_screen_type_id
 * @property string $custom_screen_name
 * @property string $custom_screen_location
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustomScreenType $customScreenType
 */
class CustomScreen extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'custom_screen';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'custom_screen_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['custom_screen_type_id', 'custom_screen_name', 'custom_screen_location', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customScreenType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomScreenType', 'custom_screen_type_id', 'custom_screen_type_id');
    }
}

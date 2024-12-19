<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $visual_theme_id
 * @property string $resource_type_enum_id
 * @property string $sequence_id
 * @property string $resource_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property VisualTheme $visualTheme
 * @property Enumeration $enumerationByResourceTypeEnumId
 */
class VisualThemeResource extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'visual_theme_resource';

    /**
     * @var array
     */
    protected $fillable = ['resource_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function visualTheme()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\VisualTheme', 'visual_theme_id', 'visual_theme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByResourceTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'resource_type_enum_id', 'enum_id');
    }
}

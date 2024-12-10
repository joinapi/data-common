<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $visual_theme_id
 * @property string $visual_theme_set_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property VisualThemeResource[] $visualThemeResources
 * @property VisualThemeSet $visualThemeSet
 */
class VisualTheme extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visual_theme';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'visual_theme_id';

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
    protected $fillable = ['visual_theme_set_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visualThemeResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\VisualThemeResource', 'visual_theme_id', 'visual_theme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function visualThemeSet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\VisualThemeSet', 'visual_theme_set_id', 'visual_theme_set_id');
    }
}

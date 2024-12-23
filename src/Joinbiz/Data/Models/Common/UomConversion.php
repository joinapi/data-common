<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $uom_id
 * @property string $uom_id_to
 * @property string $custom_method_id
 * @property float $conversion_factor
 * @property float $decimal_scale
 * @property string $rounding_mode
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uom
 * @property Uom $uomByUomIdTo
 * @property CustomMethod $customMethod
 */
class UomConversion extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'uom_conversion';

    /**
     * @var array
     */
    protected $fillable = ['custom_method_id', 'conversion_factor', 'decimal_scale', 'rounding_mode', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByUomIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'uom_id_to', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'custom_method_id', 'custom_method_id');
    }
}

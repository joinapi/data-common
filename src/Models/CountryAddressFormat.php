<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $geo_id
 * @property string $geo_assoc_type_id
 * @property string $require_state_province_id
 * @property string $require_postal_code
 * @property string $postal_code_regex
 * @property string $has_postal_code_ext
 * @property string $require_postal_code_ext
 * @property string $address_format
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geo
 * @property GeoAssocType $geoAssocType
 */
class CountryAddressFormat extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country_address_format';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'geo_id';

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
    protected $fillable = ['geo_assoc_type_id', 'require_state_province_id', 'require_postal_code', 'postal_code_regex', 'has_postal_code_ext', 'require_postal_code_ext', 'address_format', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\GeoAssocType', 'geo_assoc_type_id', 'geo_assoc_type_id');
    }
}

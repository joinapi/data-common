<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $geo_assoc_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CountryAddressFormat[] $countryAddressFormats
 * @property GeoAssoc[] $geoAssocs
 */
class GeoAssocType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'geo_assoc_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'geo_assoc_type_id';

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
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function countryAddressFormats()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CountryAddressFormat', 'geo_assoc_type_id', 'geo_assoc_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoAssoc', 'geo_assoc_type_id', 'geo_assoc_type_id');
    }
}

<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $geo_id
 * @property string $geo_id_to
 * @property string $geo_assoc_type_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geoByGeoIdTo
 * @property Geo $geo
 * @property GeoAssocType $geoAssocType
 */
class GeoAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'geo_assoc';

    /**
     * @var array
     */
    protected $fillable = ['geo_assoc_type_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByGeoIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'geo_id_to', 'geo_id');
    }

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

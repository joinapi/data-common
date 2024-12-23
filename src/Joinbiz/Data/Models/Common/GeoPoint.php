<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $geo_point_id
 * @property string $geo_point_type_enum_id
 * @property string $data_source_id
 * @property string $elevation_uom_id
 * @property string $description
 * @property string $latitude
 * @property string $longitude
 * @property float $elevation
 * @property string $information
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility[] $facilities
 * @property PostalAddress[] $postalAddresses
 * @property DataSource $dataSource
 * @property Enumeration $enumerationByGeoPointTypeEnumId
 * @property Uom $uomByElevationUomId
 * @property PartyGeoPoint[] $partyGeoPoints
 * @property FacilityLocation[] $facilityLocations
 * @property FacilityLocationGeoPoint[] $facilityLocationGeoPoints
 * @property FixedAssetGeoPoint[] $fixedAssetGeoPoints
 * @property ContainerGeoPoint[] $containerGeoPoints
 */
class GeoPoint extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'geo_point';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'geo_point_id';

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
    protected $fillable = ['geo_point_type_enum_id', 'data_source_id', 'elevation_uom_id', 'description', 'latitude', 'longitude', 'elevation', 'information', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddresses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\DataSource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByGeoPointTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'geo_point_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByElevationUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'elevation_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyGeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityLocations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityLocation', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityLocationGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityLocationGeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetGeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function containerGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ContainerGeoPoint', 'geo_point_id', 'geo_point_id');
    }
}

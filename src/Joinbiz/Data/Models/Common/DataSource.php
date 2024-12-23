<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $data_source_id
 * @property string $data_source_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContentAssoc[] $contentAssocs
 * @property GeoPoint[] $geoPoints
 * @property DataResourceMetaData[] $dataResourceMetaDatas
 * @property ContentMetaData[] $contentMetaDatas
 * @property DataResource[] $dataResources
 * @property PartyDataSource[] $partyDataSources
 * @property Party[] $parties
 * @property DataSourceType $dataSourceType
 * @property Content[] $contents
 */
class DataSource extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'data_source';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'data_source_id';

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
    protected $fillable = ['data_source_type_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentAssoc', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoPoint', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourceMetaDatas()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourceMetaData', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentMetaDatas()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentMetaData', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyDataSources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyDataSource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Party', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSourceType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\DataSourceType', 'data_source_type_id', 'data_source_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'data_source_id', 'data_source_id');
    }
}

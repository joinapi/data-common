<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $country_code
 * @property string $country_abbr
 * @property string $country_number
 * @property string $country_name
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CountryCapital $countryCapital
 * @property CountryTeleCode $countryTeleCode
 */
class CountryCode extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country_code';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'country_code';

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
    protected $fillable = ['country_abbr', 'country_number', 'country_name', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function countryCapital()
    {
        return $this->hasOne('Joinbiz\Data\Models\Common\CountryCapital', 'country_code', 'country_code');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function countryTeleCode()
    {
        return $this->hasOne('Joinbiz\Data\Models\Common\CountryTeleCode', 'country_code', 'country_code');
    }
}

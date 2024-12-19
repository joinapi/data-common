<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $custom_time_period_id
 * @property string $parent_period_id
 * @property string $period_type_id
 * @property string $organization_party_id
 * @property float $period_num
 * @property string $period_name
 * @property string $from_date
 * @property string $thru_date
 * @property string $is_closed
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property GlAccountHistory[] $glAccountHistories
 * @property Budget[] $budgets
 * @property CustomTimePeriod $customTimePeriodByParentPeriodId
 * @property Party $partyByOrganizationPartyId
 * @property PeriodType $periodType
 * @property SalesForecastHistory[] $salesForecastHistories
 * @property SalesForecast[] $salesForecasts
 */
class CustomTimePeriod extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'custom_time_period';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'custom_time_period_id';

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
    protected $fillable = ['parent_period_id', 'period_type_id', 'organization_party_id', 'period_num', 'period_name', 'from_date', 'thru_date', 'is_closed', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlAccountHistory', 'custom_time_period_id', 'custom_time_period_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Budget', 'custom_time_period_id', 'custom_time_period_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customTimePeriodByParentPeriodId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomTimePeriod', 'parent_period_id', 'custom_time_period_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByOrganizationPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function periodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PeriodType', 'period_type_id', 'period_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastHistory', 'custom_time_period_id', 'custom_time_period_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecasts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecast', 'custom_time_period_id', 'custom_time_period_id');
    }
}

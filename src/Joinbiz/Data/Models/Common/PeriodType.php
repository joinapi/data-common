<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD:src/Joinbiz/Data/Models/Common/PeriodType.php
=======
use Joinbiz\Data\Models\Accounting\RateAmount;
use Joinbiz\Data\Models\Humanres\PayHistory;
>>>>>>> 3b897f5a09638083e4d8b361917ff12b66bc372f:src/Models/PeriodType.php

/**
 * @property string $period_type_id
 * @property string $uom_id
 * @property string $description
 * @property float $period_length
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustomTimePeriod[] $customTimePeriods
 * @property Uom $uom
 * @property PayHistory[] $payHistories
 * @property RateAmount[] $rateAmounts
 */
class PeriodType extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'period_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'period_type_id';

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
    protected $fillable = ['uom_id', 'description', 'period_length', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customTimePeriods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CustomTimePeriod', 'period_type_id', 'period_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PayHistory', 'period_type_id', 'period_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\RateAmount', 'period_type_id', 'period_type_id');
    }
}

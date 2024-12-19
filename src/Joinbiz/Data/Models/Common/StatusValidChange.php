<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $status_id
 * @property string $status_id_to
 * @property string $condition_expression
 * @property string $transition_name
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property StatusItem $statusItem
 * @property StatusItem $statusItemByStatusIdTo
 */
class StatusValidChange extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'status_valid_change';

    /**
     * @var array
     */
    protected $fillable = ['condition_expression', 'transition_name', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByStatusIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id_to', 'status_id');
    }
}

<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $user_login_id
 * @property string $user_pref_type_id
 * @property string $user_pref_group_type_id
 * @property string $user_pref_value
 * @property string $user_pref_data_type
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property UserPrefGroupType $userPrefGroupType
 */
class UserPreference extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_preference';

    /**
     * @var array
     */
    protected $fillable = ['user_pref_group_type_id', 'user_pref_value', 'user_pref_data_type', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userPrefGroupType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\UserPrefGroupType', 'user_pref_group_type_id', 'user_pref_group_type_id');
    }
}

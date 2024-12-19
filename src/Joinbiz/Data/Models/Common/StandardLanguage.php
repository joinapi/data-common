<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $standard_language_id
 * @property string $lang_code3t
 * @property string $lang_code3b
 * @property string $lang_code2
 * @property string $lang_name
 * @property string $lang_family
 * @property string $lang_charset
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 */
class StandardLanguage extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'standard_language';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'standard_language_id';

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
    protected $fillable = ['lang_code3t', 'lang_code3b', 'lang_code2', 'lang_name', 'lang_family', 'lang_charset', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];
}

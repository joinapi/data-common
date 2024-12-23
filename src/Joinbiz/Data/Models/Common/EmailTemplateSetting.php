<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email_template_setting_id
 * @property string $email_type
 * @property string $description
 * @property string $body_screen_location
 * @property string $xslfo_attach_screen_location
 * @property string $from_address
 * @property string $cc_address
 * @property string $bcc_address
 * @property string $subject
 * @property string $content_type
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByEmailType
 */
class EmailTemplateSetting extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'email_template_setting';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'email_template_setting_id';

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
    protected $fillable = ['email_type', 'description', 'body_screen_location', 'xslfo_attach_screen_location', 'from_address', 'cc_address', 'bcc_address', 'subject', 'content_type', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByEmailType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'email_type', 'enum_id');
    }
}

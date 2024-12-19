<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $portal_page_id
 * @property string $portal_portlet_id
 * @property string $portlet_seq_id
 * @property string $attr_name
 * @property string $attr_value
 * @property string $attr_description
 * @property string $attr_type
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PortalPortlet $portalPortlet
 */
class PortletAttribute extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'portlet_attribute';

    /**
     * @var array
     */
    protected $fillable = ['attr_value', 'attr_description', 'attr_type', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portalPortlet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortalPortlet', 'portal_portlet_id', 'portal_portlet_id');
    }
}

<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $portal_page_id
 * @property string $portal_portlet_id
 * @property string $portlet_seq_id
 * @property string $column_seq_id
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PortalPage $portalPage
 * @property PortalPortlet $portalPortlet
 */
class PortalPagePortlet extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'portal_page_portlet';

    /**
     * @var array
     */
    protected $fillable = ['column_seq_id', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portalPage()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortalPage', 'portal_page_id', 'portal_page_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portalPortlet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortalPortlet', 'portal_portlet_id', 'portal_portlet_id');
    }
}

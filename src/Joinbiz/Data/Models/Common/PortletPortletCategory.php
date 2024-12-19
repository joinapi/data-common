<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $portal_portlet_id
 * @property string $portlet_category_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PortletCategory $portletCategory
 * @property PortalPortlet $portalPortlet
 */
class PortletPortletCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'portlet_portlet_category';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portletCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortletCategory', 'portlet_category_id', 'portlet_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portalPortlet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortalPortlet', 'portal_portlet_id', 'portal_portlet_id');
    }
}

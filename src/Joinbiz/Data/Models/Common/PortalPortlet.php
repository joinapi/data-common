<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $portal_portlet_id
 * @property string $portlet_name
 * @property string $screen_name
 * @property string $screen_location
 * @property string $edit_form_name
 * @property string $edit_form_location
 * @property string $description
 * @property string $screenshot
 * @property string $security_service_name
 * @property string $security_main_action
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PortalPagePortlet[] $portalPagePortlets
 * @property PortletAttribute[] $portletAttributes
 * @property PortletPortletCategory[] $portletPortletCategories
 */
class PortalPortlet extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'portal_portlet';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'portal_portlet_id';

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
    protected $fillable = ['portlet_name', 'screen_name', 'screen_location', 'edit_form_name', 'edit_form_location', 'description', 'screenshot', 'security_service_name', 'security_main_action', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portalPagePortlets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PortalPagePortlet', 'portal_portlet_id', 'portal_portlet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portletAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PortletAttribute', 'portal_portlet_id', 'portal_portlet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portletPortletCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PortletPortletCategory', 'portal_portlet_id', 'portal_portlet_id');
    }
}

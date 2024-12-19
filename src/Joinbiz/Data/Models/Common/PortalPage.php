<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD:src/Joinbiz/Data/Models/Common/PortalPage.php
=======
use Joinbiz\Data\Models\Content\Content;
use Joinbiz\Data\Models\Security\SecurityGroup;
>>>>>>> 3b897f5a09638083e4d8b361917ff12b66bc372f:src/Models/PortalPage.php

/**
 * @property string $portal_page_id
 * @property string $parent_portal_page_id
 * @property string $security_group_id
 * @property string $help_content_id
 * @property string $portal_page_name
 * @property string $description
 * @property string $owner_user_login_id
 * @property string $original_portal_page_id
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PortalPage $portalPageByParentPortalPageId
 * @property SecurityGroup $securityGroupBySecurityGroupId
 * @property Content $contentByHelpContentId
 * @property PortalPageColumn[] $portalPageColumns
 * @property PortalPagePortlet[] $portalPagePortlets
 */
class PortalPage extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'portal_page';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'portal_page_id';

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
    protected $fillable = ['parent_portal_page_id', 'security_group_id', 'help_content_id', 'portal_page_name', 'description', 'owner_user_login_id', 'original_portal_page_id', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portalPageByParentPortalPageId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\PortalPage', 'parent_portal_page_id', 'portal_page_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function securityGroupBySecurityGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\SecurityGroup', 'security_group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentByHelpContentId()
    {
        return $this->belongsTo('\Content', 'help_content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portalPageColumns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PortalPageColumn', 'portal_page_id', 'portal_page_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portalPagePortlets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PortalPagePortlet', 'portal_page_id', 'portal_page_id');
    }
}

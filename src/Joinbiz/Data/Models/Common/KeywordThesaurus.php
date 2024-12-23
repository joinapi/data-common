<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $entered_keyword
 * @property string $alternate_keyword
 * @property string $relationship_enum_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByRelationshipEnumId
 */
class KeywordThesaurus extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'keyword_thesaurus';

    /**
     * @var array
     */
    protected $fillable = ['relationship_enum_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByRelationshipEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'relationship_enum_id', 'enum_id');
    }
}

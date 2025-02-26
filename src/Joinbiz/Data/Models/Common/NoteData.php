<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $note_id
 * @property string $note_party
 * @property string $note_name
 * @property string $note_info
 * @property string $note_date_time
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property string $more_info_url
 * @property string $more_info_item_id
 * @property string $more_info_item_name
 * @property CustRequestItemNote[] $custRequestItemNotes
 * @property CustRequestNote[] $custRequestNotes
 * @property InvoiceNote[] $invoiceNotes
 * @property MarketingCampaignNote[] $marketingCampaignNotes
 * @property OrderHeaderNote[] $orderHeaderNotes
 * @property PartyNote[] $partyNotes
 * @property WorkEffort[] $workEfforts
 * @property Party $partyByNoteParty
 * @property QuoteNote[] $quoteNotes
 * @property WorkEffortNote[] $workEffortNotes
 */
class NoteData extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'note_data';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'note_id';

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
    protected $fillable = ['note_party', 'note_name', 'note_info', 'note_date_time', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp', 'more_info_url', 'more_info_item_id', 'more_info_item_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestItemNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestItemNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeaderNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeaderNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffort', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByNoteParty()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'note_party', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteNote', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortNote', 'note_id', 'note_id');
    }
}

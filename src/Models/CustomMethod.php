<?php

namespace Joinbiz\Data\Models\Common;

use Joinbiz\Data\Models\Accounting\FixedAssetDepMethod;
use Joinbiz\Data\Models\Accounting\PartyAcctgPreference;
use Joinbiz\Data\Models\Content\Content;
use Joinbiz\Data\Models\Product\CostComponentCalc;
use Joinbiz\Data\Models\Product\ProductAssoc;
use Joinbiz\Data\Models\Product\ProductPrice;
use Joinbiz\Data\Models\Product\ProductPromoAction;
use Joinbiz\Data\Models\Product\ProductPromoCond;
use Joinbiz\Data\Models\Product\ProductStorePaymentSetting;
use Joinbiz\Data\Models\Product\ProductStoreShipmentMeth;
use Joinbiz\Data\Models\Workeffort\WorkEffort;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $custom_method_id
 * @property string $custom_method_type_id
 * @property string $custom_method_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPromoCond[] $productPromoConds
 * @property ProductPromoAction[] $productPromoActions
 * @property ProductPrice[] $productPricesByCustomPriceCalcService
 * @property ProductAssoc[] $productAssocsByEstimateCalcMethod
 * @property WorkEffort[] $workEffortsByEstimateCalcMethod
 * @property CustomMethodType $customMethodType
 * @property Content[] $contents
 * @property CostComponentCalc[] $costComponentCalcsByCostCustomMethodId
 * @property FixedAssetDepMethod[] $fixedAssetDepMethodsByDepreciationCustomMethodId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByInvoiceSeqCustMethId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByOrderSeqCustMethId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByQuoteSeqCustMethId
 * @property ProductStoreShipmentMeth[] $productStoreShipmentMethsByShipmentCustomMethodId
 * @property ProductStorePaymentSetting[] $productStorePaymentSettingsByPaymentCustomMethodId
 * @property UomConversionDated[] $uomConversionDateds
 * @property UomConversion[] $uomConversions
 */
class CustomMethod extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'custom_method';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'custom_method_id';

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
    protected $fillable = ['custom_method_type_id', 'custom_method_name', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoConds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCond', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoActions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoAction', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByCustomPriceCalcService()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'custom_price_calc_service', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAssocsByEstimateCalcMethod()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAssoc', 'estimate_calc_method', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortsByEstimateCalcMethod()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffort', 'estimate_calc_method', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethodType', 'custom_method_type_id', 'custom_method_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentCalcsByCostCustomMethodId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponentCalc', 'cost_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetDepMethodsByDepreciationCustomMethodId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetDepMethod', 'depreciation_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByInvoiceSeqCustMethId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'invoice_seq_cust_meth_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByOrderSeqCustMethId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'order_seq_cust_meth_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByQuoteSeqCustMethId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'quote_seq_cust_meth_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreShipmentMethsByShipmentCustomMethodId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreShipmentMeth', 'shipment_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStorePaymentSettingsByPaymentCustomMethodId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStorePaymentSetting', 'payment_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversionDateds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversionDated', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversion', 'custom_method_id', 'custom_method_id');
    }
}

<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $uom_id
 * @property string $uom_type_id
 * @property string $abbreviation
 * @property float $numeric_code
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FixedAssetProduct[] $fixedAssetProductsByQuantityUomId
 * @property Payment[] $paymentsByActualCurrencyUomId
 * @property Payment[] $paymentsByCurrencyUomId
 * @property OrderHeader[] $orderHeadersByCurrencyUom
 * @property PaymentGatewayResponse[] $paymentGatewayResponsesByCurrencyUomId
 * @property Subscription[] $subscriptionsByAvailableTimeUomId
 * @property Subscription[] $subscriptionsByCanclAutmExtTimeUomId
 * @property Subscription[] $subscriptionsByGracePeriodOnExpiryUomId
 * @property Subscription[] $subscriptionsByMaxLifeTimeUomId
 * @property Subscription[] $subscriptionsByUseTimeUomId
 * @property FixedAssetStdCost[] $fixedAssetStdCostsByAmountUomId
 * @property InventoryItem[] $inventoryItemsByCurrencyUomId
 * @property InventoryItem[] $inventoryItems
 * @property ProductPrice[] $productPricesByCurrencyUomId
 * @property ProductPrice[] $productPricesByTermUomId
 * @property GeoPoint[] $geoPointsByElevationUomId
 * @property FixedAsset[] $fixedAssets
 * @property ProductMeter[] $productMetersByMeterUomId
 * @property ProductMaint[] $productMaintsByIntervalUomId
 * @property OrderItem[] $orderItemsByRecurringFreqUomId
 * @property SalesOpportunity[] $salesOpportunitiesByCurrencyUomId
 * @property MarketingCampaign[] $marketingCampaignsByCurrencyUomId
 * @property CustRequest[] $custRequestsByMaximumAmountUomId
 * @property CustRequest[] $custRequestsByCurrencyUomId
 * @property QuoteItem[] $quoteItems
 * @property ProductFeaturePrice[] $productFeaturePricesByCurrencyUomId
 * @property WorkEffort[] $workEffortsByMoneyUomId
 * @property ProductFeature[] $productFeatures
 * @property ProductContent[] $productContentsByUseTimeUomId
 * @property Quote[] $quotesByCurrencyUomId
 * @property UomType $uomType
 * @property Product[] $productsByDepthUomId
 * @property Product[] $productsByDiameterUomId
 * @property Product[] $productsByHeightUomId
 * @property Product[] $productsByQuantityUomId
 * @property Product[] $productsByWeightUomId
 * @property Product[] $productsByWidthUomId
 * @property Facility[] $facilitiesByDefaultDimensionUomId
 * @property Facility[] $facilitiesByDefaultWeightUomId
 * @property Facility[] $facilitiesByFacilitySizeUomId
 * @property ShipmentBoxType[] $shipmentBoxTypesByDimensionUomId
 * @property ShipmentBoxType[] $shipmentBoxTypesByWeightUomId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByBillingWeightUomId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByCurrencyUomId
 * @property CostComponent[] $costComponentsByCostUomId
 * @property PeriodType[] $periodTypes
 * @property BillingAccountTerm[] $billingAccountTerms
 * @property ShipmentPackageRouteSeg[] $shipmentPackageRouteSegsByCurrencyUomId
 * @property InvoiceItem[] $invoiceItems
 * @property SalesOpportunityHistory[] $salesOpportunityHistoriesByCurrencyUomId
 * @property SupplierProduct[] $supplierProductsByCurrencyUomId
 * @property SupplierProduct[] $supplierProductsByQuantityUomId
 * @property SalesForecastHistory[] $salesForecastHistoriesByCurrencyUomId
 * @property SalesForecast[] $salesForecastsByCurrencyUomId
 * @property ProductStore[] $productStoresByDefaultCurrencyUomId
 * @property ShipmentTimeEstimate[] $shipmentTimeEstimatesByLeadTimeUomId
 * @property SalesForecastDetail[] $salesForecastDetailsByQuantityUomId
 * @property Party[] $partiesByPreferredCurrencyUomId
 * @property RateAmount[] $rateAmountsByRateCurrencyUomId
 * @property OrderDeliverySchedule[] $orderDeliverySchedulesByTotalCubicUomId
 * @property OrderDeliverySchedule[] $orderDeliverySchedulesByTotalWeightUomId
 * @property CostComponentCalc[] $costComponentCalcsByCurrencyUomId
 * @property AcctgTransEntry[] $acctgTransEntriesByCurrencyUomId
 * @property AcctgTransEntry[] $acctgTransEntriesByOrigCurrencyUomId
 * @property FinAccount[] $finAccountsByCurrencyUomId
 * @property ShipmentPackage[] $shipmentPackagesByDimensionUomId
 * @property ShipmentPackage[] $shipmentPackagesByWeightUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByAvailableTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByCanclAutmExtTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByGracePeriodOnExpiryUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByMaxLifeTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByUseTimeUomId
 * @property OrderTerm[] $orderTerms
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByBaseCurrencyUomId
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByPriceUomId
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByQuantityUomId
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByWeightUomId
 * @property Shipment[] $shipmentsByCurrencyUomId
 * @property ReturnHeader[] $returnHeadersByCurrencyUomId
 * @property ProductMeterType[] $productMeterTypesByDefaultUomId
 * @property BillingAccount[] $billingAccountsByAccountCurrencyUomId
 * @property Invoice[] $invoicesByCurrencyUomId
 * @property FixedAssetMaint[] $fixedAssetMaintsByIntervalUomId
 * @property UomGroup[] $uomGroups
 * @property UomConversionDated[] $uomConversionDateds
 * @property UomConversionDated[] $uomConversionDatedsByUomIdTo
 * @property UomConversion[] $uomConversions
 * @property UomConversion[] $uomConversionsByUomIdTo
 * @property SupplierProductFeature[] $supplierProductFeatures
 */
class Uom extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'uom';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uom_id';

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
    protected $fillable = ['uom_type_id', 'abbreviation', 'numeric_code', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetProductsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FixedAssetProduct', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByActualCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Payment', 'actual_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Payment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeadersByCurrencyUom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\OrderHeader', 'currency_uom', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGatewayResponsesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PaymentGatewayResponse', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByAvailableTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Subscription', 'available_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByCanclAutmExtTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Subscription', 'cancl_autm_ext_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByGracePeriodOnExpiryUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Subscription', 'grace_period_on_expiry_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByMaxLifeTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Subscription', 'max_life_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Subscription', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetStdCostsByAmountUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FixedAssetStdCost', 'amount_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\InventoryItem', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\InventoryItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductPrice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByTermUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductPrice', 'term_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoPointsByElevationUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoPoint', 'elevation_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FixedAsset', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMetersByMeterUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductMeter', 'meter_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaintsByIntervalUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductMaint', 'interval_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemsByRecurringFreqUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\OrderItem', 'recurring_freq_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunitiesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SalesOpportunity', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\MarketingCampaign', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByMaximumAmountUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CustRequest', 'maximum_amount_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CustRequest', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\QuoteItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeaturePricesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductFeaturePrice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortsByMoneyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\WorkEffort', 'money_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductFeature', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productContentsByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductContent', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Quote', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\UomType', 'uom_type_id', 'uom_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByDepthUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'depth_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByDiameterUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'diameter_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByHeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'height_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByWidthUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Product', 'width_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByDefaultDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Facility', 'default_dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByDefaultWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Facility', 'default_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByFacilitySizeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Facility', 'facility_size_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentBoxTypesByDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentBoxType', 'dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentBoxTypesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentBoxType', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByBillingWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentRouteSegment', 'billing_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentRouteSegment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentsByCostUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CostComponent', 'cost_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function periodTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PeriodType', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\BillingAccountTerm', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackageRouteSegsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentPackageRouteSeg', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\InvoiceItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityHistoriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SalesOpportunityHistory', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SupplierProduct', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SupplierProduct', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SalesForecastHistory', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SalesForecast', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByDefaultCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductStore', 'default_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentTimeEstimatesByLeadTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentTimeEstimate', 'lead_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastDetailsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SalesForecastDetail', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partiesByPreferredCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Party', 'preferred_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmountsByRateCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\RateAmount', 'rate_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDeliverySchedulesByTotalCubicUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\OrderDeliverySchedule', 'total_cubic_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDeliverySchedulesByTotalWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\OrderDeliverySchedule', 'total_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentCalcsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CostComponentCalc', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\AcctgTransEntry', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntriesByOrigCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\AcctgTransEntry', 'orig_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FinAccount', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackagesByDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentPackage', 'dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackagesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentPackage', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByAvailableTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductSubscriptionResource', 'available_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByCanclAutmExtTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductSubscriptionResource', 'cancl_autm_ext_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByGracePeriodOnExpiryUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductSubscriptionResource', 'grace_period_on_expiry_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByMaxLifeTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductSubscriptionResource', 'max_life_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductSubscriptionResource', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\OrderTerm', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByBaseCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\PartyAcctgPreference', 'base_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByPriceUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentCostEstimate', 'price_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentCostEstimate', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ShipmentCostEstimate', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Shipment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ReturnHeader', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMeterTypesByDefaultUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\ProductMeterType', 'default_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountsByAccountCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\BillingAccount', 'account_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\Invoice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaintsByIntervalUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FixedAssetMaint', 'interval_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomGroups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomGroup', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversionDateds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversionDated', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversionDatedsByUomIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversionDated', 'uom_id_to', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversion', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversionsByUomIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversion', 'uom_id_to', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\SupplierProductFeature', 'uom_id', 'uom_id');
    }
}

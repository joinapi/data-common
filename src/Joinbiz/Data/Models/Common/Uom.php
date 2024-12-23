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
 * @property Facility[] $facilitiesByDefaultDimensionUomId
 * @property Facility[] $facilitiesByDefaultWeightUomId
 * @property Facility[] $facilitiesByFacilitySizeUomId
 * @property BillingAccount[] $billingAccountsByAccountCurrencyUomId
 * @property InvoiceItem[] $invoiceItems
 * @property AcctgTransEntry[] $acctgTransEntriesByCurrencyUomId
 * @property AcctgTransEntry[] $acctgTransEntriesByOrigCurrencyUomId
 * @property OrderHeader[] $orderHeadersByCurrencyUom
 * @property FixedAsset[] $fixedAssets
 * @property GeoPoint[] $geoPointsByElevationUomId
 * @property SalesOpportunityHistory[] $salesOpportunityHistoriesByCurrencyUomId
 * @property SalesForecastHistory[] $salesForecastHistoriesByCurrencyUomId
 * @property InventoryItem[] $inventoryItemsByCurrencyUomId
 * @property InventoryItem[] $inventoryItems
 * @property SalesForecastDetail[] $salesForecastDetailsByQuantityUomId
 * @property OrderItem[] $orderItemsByRecurringFreqUomId
 * @property SalesForecast[] $salesForecastsByCurrencyUomId
 * @property SalesOpportunity[] $salesOpportunitiesByCurrencyUomId
 * @property ShipmentBoxType[] $shipmentBoxTypesByDimensionUomId
 * @property ShipmentBoxType[] $shipmentBoxTypesByWeightUomId
 * @property MarketingCampaign[] $marketingCampaignsByCurrencyUomId
 * @property CustRequest[] $custRequestsByMaximumAmountUomId
 * @property CustRequest[] $custRequestsByCurrencyUomId
 * @property OrderDeliverySchedule[] $orderDeliverySchedulesByTotalCubicUomId
 * @property OrderDeliverySchedule[] $orderDeliverySchedulesByTotalWeightUomId
 * @property QuoteItem[] $quoteItems
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByPriceUomId
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByQuantityUomId
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByWeightUomId
 * @property SupplierProduct[] $supplierProductsByCurrencyUomId
 * @property SupplierProduct[] $supplierProductsByQuantityUomId
 * @property Product[] $productsByDepthUomId
 * @property Product[] $productsByDiameterUomId
 * @property Product[] $productsByHeightUomId
 * @property Product[] $productsByQuantityUomId
 * @property Product[] $productsByWeightUomId
 * @property Product[] $productsByWidthUomId
 * @property ShipmentTimeEstimate[] $shipmentTimeEstimatesByLeadTimeUomId
 * @property ProductFeature[] $productFeatures
 * @property WorkEffort[] $workEffortsByMoneyUomId
 * @property Quote[] $quotesByCurrencyUomId
 * @property OrderTerm[] $orderTerms
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByBaseCurrencyUomId
 * @property ShipmentPackage[] $shipmentPackagesByDimensionUomId
 * @property ShipmentPackage[] $shipmentPackagesByWeightUomId
 * @property RateAmount[] $rateAmountsByRateCurrencyUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByAvailableTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByCanclAutmExtTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByGracePeriodOnExpiryUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByMaxLifeTimeUomId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByUseTimeUomId
 * @property Shipment[] $shipmentsByCurrencyUomId
 * @property ProductStore[] $productStoresByDefaultCurrencyUomId
 * @property ReturnHeader[] $returnHeadersByCurrencyUomId
 * @property ProductPrice[] $productPricesByCurrencyUomId
 * @property ProductPrice[] $productPricesByTermUomId
 * @property CostComponentCalc[] $costComponentCalcsByCurrencyUomId
 * @property ProductMeter[] $productMetersByMeterUomId
 * @property PeriodType[] $periodTypes
 * @property ProductMaint[] $productMaintsByIntervalUomId
 * @property BillingAccountTerm[] $billingAccountTerms
 * @property CostComponent[] $costComponentsByCostUomId
 * @property ProductFeaturePrice[] $productFeaturePricesByCurrencyUomId
 * @property ProductMeterType[] $productMeterTypesByDefaultUomId
 * @property Invoice[] $invoicesByCurrencyUomId
 * @property ProductContent[] $productContentsByUseTimeUomId
 * @property FixedAssetMaint[] $fixedAssetMaintsByIntervalUomId
 * @property FixedAssetProduct[] $fixedAssetProductsByQuantityUomId
 * @property Party[] $partiesByPreferredCurrencyUomId
 * @property UomType $uomType
 * @property FixedAssetStdCost[] $fixedAssetStdCostsByAmountUomId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByBillingWeightUomId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByCurrencyUomId
 * @property FinAccount[] $finAccountsByCurrencyUomId
 * @property Payment[] $paymentsByActualCurrencyUomId
 * @property Payment[] $paymentsByCurrencyUomId
 * @property Subscription[] $subscriptionsByAvailableTimeUomId
 * @property Subscription[] $subscriptionsByCanclAutmExtTimeUomId
 * @property Subscription[] $subscriptionsByGracePeriodOnExpiryUomId
 * @property Subscription[] $subscriptionsByMaxLifeTimeUomId
 * @property Subscription[] $subscriptionsByUseTimeUomId
 * @property ShipmentPackageRouteSeg[] $shipmentPackageRouteSegsByCurrencyUomId
 * @property PaymentGatewayResponse[] $paymentGatewayResponsesByCurrencyUomId
 * @property SupplierProductFeature[] $supplierProductFeatures
 * @property UomGroup[] $uomGroups
 * @property UomConversionDated[] $uomConversionDateds
 * @property UomConversionDated[] $uomConversionDatedsByUomIdTo
 * @property UomConversion[] $uomConversions
 * @property UomConversion[] $uomConversionsByUomIdTo
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
    public function facilitiesByDefaultDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'default_dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByDefaultWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'default_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByFacilitySizeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'facility_size_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountsByAccountCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BillingAccount', 'account_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntriesByOrigCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'orig_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeadersByCurrencyUom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeader', 'currency_uom', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAsset', 'uom_id', 'uom_id');
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
    public function salesOpportunityHistoriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityHistory', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastHistory', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastDetailsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastDetail', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemsByRecurringFreqUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItem', 'recurring_freq_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecast', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunitiesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentBoxTypesByDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentBoxType', 'dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentBoxTypesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentBoxType', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaign', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByMaximumAmountUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'maximum_amount_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDeliverySchedulesByTotalCubicUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderDeliverySchedule', 'total_cubic_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDeliverySchedulesByTotalWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderDeliverySchedule', 'total_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteItem', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByPriceUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'price_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProduct', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProduct', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByDepthUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'depth_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByDiameterUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'diameter_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByHeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'height_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByWidthUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'width_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentTimeEstimatesByLeadTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentTimeEstimate', 'lead_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeature', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortsByMoneyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffort', 'money_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Quote', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderTerm', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByBaseCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PartyAcctgPreference', 'base_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackagesByDimensionUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentPackage', 'dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackagesByWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentPackage', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmountsByRateCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\RateAmount', 'rate_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByAvailableTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'available_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByCanclAutmExtTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'cancl_autm_ext_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByGracePeriodOnExpiryUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'grace_period_on_expiry_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByMaxLifeTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'max_life_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByDefaultCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'default_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnHeader', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByTermUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'term_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentCalcsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponentCalc', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMetersByMeterUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMeter', 'meter_uom_id', 'uom_id');
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
    public function productMaintsByIntervalUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMaint', 'interval_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BillingAccountTerm', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentsByCostUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'cost_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeaturePricesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeaturePrice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMeterTypesByDefaultUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMeterType', 'default_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productContentsByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductContent', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaintsByIntervalUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetMaint', 'interval_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetProductsByQuantityUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetProduct', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partiesByPreferredCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Party', 'preferred_currency_uom_id', 'uom_id');
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
    public function fixedAssetStdCostsByAmountUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetStdCost', 'amount_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByBillingWeightUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'billing_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccount', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByActualCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'actual_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByAvailableTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'available_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByCanclAutmExtTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'cancl_autm_ext_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByGracePeriodOnExpiryUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'grace_period_on_expiry_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByMaxLifeTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'max_life_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByUseTimeUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackageRouteSegsByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentPackageRouteSeg', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGatewayResponsesByCurrencyUomId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentGatewayResponse', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProductFeature', 'uom_id', 'uom_id');
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
}

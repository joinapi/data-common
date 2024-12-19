<?php

namespace Joinbiz\Data\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $geo_id
 * @property string $geo_type_id
 * @property string $geo_name
 * @property string $geo_code
 * @property string $geo_sec_code
 * @property string $abbreviation
 * @property string $well_known_text
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property QuoteAdjustment[] $quoteAdjustmentsByPrimaryGeoId
 * @property QuoteAdjustment[] $quoteAdjustmentsBySecondaryGeoId
 * @property PostalAddress[] $postalAddressesByCountryGeoId
 * @property PostalAddress[] $postalAddressesByCityGeoId
 * @property PostalAddress[] $postalAddressesByCountyGeoId
 * @property PostalAddress[] $postalAddressesByMunicipalityGeoId
 * @property PostalAddress[] $postalAddressesByPostalCodeGeoId
 * @property PostalAddress[] $postalAddressesByStateProvinceGeoId
 * @property ProductGeo[] $productGeos
 * @property ProductPrice[] $productPricesByTaxAuthGeoId
 * @property OrderAdjustment[] $orderAdjustmentsByPrimaryGeoId
 * @property OrderAdjustment[] $orderAdjustmentsBySecondaryGeoId
 * @property InvoiceItem[] $invoiceItemsByTaxAuthGeoId
 * @property CountryAddressFormat $countryAddressFormat
 * @property GeoType $geoType
 * @property CostComponent[] $costComponents
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByGeoIdFrom
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByGeoIdTo
 * @property GeoAssoc[] $geoAssocsByGeoIdTo
 * @property GeoAssoc[] $geoAssocs
 * @property Product[] $productsByOriginGeoId
 * @property ShipmentTimeEstimate[] $shipmentTimeEstimatesByGeoIdFrom
 * @property ShipmentTimeEstimate[] $shipmentTimeEstimatesByGeoIdTo
 * @property SegmentGroupGeo[] $segmentGroupGeos
 * @property AgreementGeographicalApplic[] $agreementGeographicalApplics
 * @property TaxAuthority[] $taxAuthoritiesByTaxAuthGeoId
 * @property PaymentApplication[] $paymentApplicationsByTaxAuthGeoId
 * @property ReturnAdjustment[] $returnAdjustmentsByPrimaryGeoId
 * @property ReturnAdjustment[] $returnAdjustmentsBySecondaryGeoId
 * @property ReorderGuideline[] $reorderGuidelines
 * @property PostalAddressBoundary[] $postalAddressBoundaries
 * @property SurveyQuestion[] $surveyQuestions
 */
class Geo extends Model
{
    const CREATED_AT = 'created_stamp';

    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'geo';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'geo_id';

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
    protected $fillable = ['geo_type_id', 'geo_name', 'geo_code', 'geo_sec_code', 'abbreviation', 'well_known_text', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteAdjustmentsByPrimaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\QuoteAdjustment', 'primary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteAdjustmentsBySecondaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\QuoteAdjustment', 'secondary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByCountryGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'country_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByCityGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'city_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByCountyGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'county_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByMunicipalityGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'municipality_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByPostalCodeGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'postal_code_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressesByStateProvinceGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddress', 'state_province_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGeos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGeo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByTaxAuthGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'tax_auth_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderAdjustmentsByPrimaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\OrderAdjustment', 'primary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderAdjustmentsBySecondaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\OrderAdjustment', 'secondary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemsByTaxAuthGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItem', 'tax_auth_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function countryAddressFormat()
    {
        return $this->hasOne('Joinbiz\Data\Models\Common\CountryAddressFormat', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\GeoType', 'geo_type_id', 'geo_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByGeoIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'geo_id_from', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByGeoIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'geo_id_to', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoAssocsByGeoIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoAssoc', 'geo_id_to', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoAssoc', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByOriginGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'origin_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentTimeEstimatesByGeoIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentTimeEstimate', 'geo_id_from', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentTimeEstimatesByGeoIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentTimeEstimate', 'geo_id_to', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroupGeos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SegmentGroupGeo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementGeographicalApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementGeographicalApplic', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthoritiesByTaxAuthGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthority', 'tax_auth_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentApplicationsByTaxAuthGeoId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentApplication', 'tax_auth_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnAdjustmentsByPrimaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\ReturnAdjustment', 'primary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnAdjustmentsBySecondaryGeoId()
    {
        return $this->hasMany('App\Joinbiz\Data\Models\Order\ReturnAdjustment', 'secondary_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reorderGuidelines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReorderGuideline', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postalAddressBoundaries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddressBoundary', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyQuestions()
    {
        return $this->hasMany('\SurveyQuestion', 'geo_id', 'geo_id');
    }
}

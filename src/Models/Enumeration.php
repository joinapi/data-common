<?php

namespace Joinbiz\Data\Models\Common;

use Joinbiz\Data\Models\Accounting\FinAccountTrans;
use Joinbiz\Data\Models\Accounting\FinAccountType;
use Joinbiz\Data\Models\Accounting\FixedAsset;
use Joinbiz\Data\Models\Accounting\GiftCardFulfillment;
use Joinbiz\Data\Models\Accounting\PartyAcctgPreference;
use Joinbiz\Data\Models\Accounting\PaymentGatewayResponse;
use Joinbiz\Data\Models\Content\Content;
use Joinbiz\Data\Models\Content\ContentPurposeOperation;
use Joinbiz\Data\Models\Humanres\JobInterview;
use Joinbiz\Data\Models\Humanres\JobRequisition;
use Joinbiz\Data\Models\Marketing\SalesOpportunity;
use Joinbiz\Data\Models\Marketing\TrackingCodeVisit;
use Joinbiz\Data\Models\Order\CustRequest;
use Joinbiz\Data\Models\Order\OrderHeader;
use Joinbiz\Data\Models\Order\OrderItemChange;
use Joinbiz\Data\Models\Order\OrderNotification;
use Joinbiz\Data\Models\Order\Quote;
use Joinbiz\Data\Models\Party\CommunicationEvent;
use Joinbiz\Data\Models\Party\Person;
use Joinbiz\Data\Models\Product\FacilityLocation;
use Joinbiz\Data\Models\Product\InventoryItemDetail;
use Joinbiz\Data\Models\Product\Product;
use Joinbiz\Data\Models\Product\ProductCategoryLink;
use Joinbiz\Data\Models\Product\ProductFacility;
use Joinbiz\Data\Models\Product\ProductGeo;
use Joinbiz\Data\Models\Product\ProductPriceCond;
use Joinbiz\Data\Models\Product\ProductPromoAction;
use Joinbiz\Data\Models\Product\ProductPromoCategory;
use Joinbiz\Data\Models\Product\ProductPromoCond;
use Joinbiz\Data\Models\Product\ProductPromoProduct;
use Joinbiz\Data\Models\Product\ProductStore;
use Joinbiz\Data\Models\Product\ProductStoreEmailSetting;
use Joinbiz\Data\Models\Product\ProductStoreFinActSetting;
use Joinbiz\Data\Models\Product\ProductStoreKeywordOvrd;
use Joinbiz\Data\Models\Product\ProductStorePaymentSetting;
use Joinbiz\Data\Models\Product\ProductStoreVendorPayment;
use Joinbiz\Data\Models\Security\UserLoginSecurityQuestion;
use Joinbiz\Data\Models\Service\JobManagerLock;
use Joinbiz\Data\Models\Workeffort\WorkEffort;
use Joinbiz\Data\Models\Workeffort\WorkEffortPartyAssignment;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $enum_id
 * @property string $enum_type_id
 * @property string $enum_code
 * @property string $sequence_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FinAccountTrans[] $finAccountTransByReasonEnumId
 * @property CommunicationEvent[] $communicationEventsByReasonEnumId
 * @property ProductPromoProduct[] $productPromoProductsByProductPromoApplEnumId
 * @property OrderHeader[] $orderHeadersBySalesChannelEnumId
 * @property ProductPromoCond[] $productPromoCondsByInputParamEnumId
 * @property ProductPromoCond[] $productPromoCondsByOperatorEnumId
 * @property PaymentGatewayResponse[] $paymentGatewayResponsesByPaymentServiceTypeEnumId
 * @property PaymentGatewayResponse[] $paymentGatewayResponsesByTransCodeEnumId
 * @property ProductPromoCategory[] $productPromoCategoriesByProductPromoApplEnumId
 * @property ProductPromoAction[] $productPromoActionsByProductPromoActionEnumId
 * @property ProductPriceCond[] $productPriceCondsByInputParamEnumId
 * @property ProductPriceCond[] $productPriceCondsByOperatorEnumId
 * @property GeoPoint[] $geoPointsByGeoPointTypeEnumId
 * @property FixedAsset[] $fixedAssetsByClassEnumId
 * @property Person[] $peopleByEmploymentStatusEnumId
 * @property Person[] $peopleByResidenceStatusEnumId
 * @property ProductKeywordNew[] $productKeywordNewsByKeywordTypeId
 * @property SalesOpportunity[] $salesOpportunitiesByTypeEnumId
 * @property GiftCardFulfillment[] $giftCardFulfillmentsByTypeEnumId
 * @property ProductGeo[] $productGeosByProductGeoEnumId
 * @property CustRequest[] $custRequestsBySalesChannelEnumId
 * @property ProductCategoryLink[] $productCategoryLinksByLinkTypeEnumId
 * @property WorkEffort[] $workEffortsByScopeEnumId
 * @property Quote[] $quotesBySalesChannelEnumId
 * @property ProductFacility[] $productFacilitiesByReplenishMethodEnumId
 * @property ProductFacility[] $productFacilitiesByRequirementMethodEnumId
 * @property Product[] $productsByRatingTypeEnum
 * @property Product[] $productsByRequirementMethodEnumId
 * @property Product[] $productsByVirtualVariantMethodEnum
 * @property InventoryItemDetail[] $inventoryItemDetailsByReasonEnumId
 * @property FacilityLocation[] $facilityLocationsByLocationTypeEnumId
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignmentsByDelegateReasonEnumId
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignmentsByExpectationEnumId
 * @property EnumerationType $enumerationType
 * @property ProductStore[] $productStoresByReserveOrderEnumId
 * @property ProductStore[] $productStoresByRequirementMethodEnumId
 * @property ProductStore[] $productStoresByDefaultSalesChannelEnumId
 * @property ProductStore[] $productStoresByStoreCreditAccountEnumId
 * @property JobInterview[] $jobInterviewsByGradeSecuredEnumId
 * @property JobManagerLock[] $jobManagerLocksByReasonEnumId
 * @property KeywordThesaurus[] $keywordThesaurusesByRelationshipEnumId
 * @property Content[] $contentsByPrivilegeEnumId
 * @property ContentPurposeOperation[] $contentPurposeOperationsByPrivilegeEnumId
 * @property OrderItemChange[] $orderItemChangesByReasonEnumId
 * @property OrderItemChange[] $orderItemChangesByChangeTypeEnumId
 * @property FinAccountType[] $finAccountTypesByReplenishEnumId
 * @property OrderNotification[] $orderNotificationsByEmailType
 * @property ProductStoreVendorPayment[] $productStoreVendorPaymentsByCreditCardEnumId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByCogsMethodId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByInvoiceSequenceEnumId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByOrderSequenceEnumId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByQuoteSequenceEnumId
 * @property PartyAcctgPreference[] $partyAcctgPreferencesByTaxFormId
 * @property JobRequisition[] $jobRequisitionsByExamTypeEnumId
 * @property JobRequisition[] $jobRequisitionsByJobPostingTypeEnumId
 * @property ProductStorePaymentSetting[] $productStorePaymentSettingsByPaymentServiceTypeEnumId
 * @property ProductStoreKeywordOvrd[] $productStoreKeywordOvrdsByTargetTypeEnumId
 * @property EmailTemplateSetting[] $emailTemplateSettingsByEmailType
 * @property ProductStoreFinActSetting[] $productStoreFinActSettingsByReplenishMethodEnumId
 * @property ProductStoreEmailSetting[] $productStoreEmailSettingsByEmailType
 * @property UomConversionDated[] $uomConversionDatedsByPurposeEnumId
 * @property TrackingCodeVisit[] $trackingCodeVisitsBySourceEnumId
 * @property VisualThemeResource[] $visualThemeResourcesByResourceTypeEnumId
 * @property UserLoginSecurityQuestion[] $userLoginSecurityQuestionsByQuestionEnumId
 */
class Enumeration extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enumeration';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'enum_id';

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
    protected $fillable = ['enum_type_id', 'enum_code', 'sequence_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTransByReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountTrans', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoProductsByProductPromoApplEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoProduct', 'product_promo_appl_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeadersBySalesChannelEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeader', 'sales_channel_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCondsByInputParamEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCond', 'input_param_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCondsByOperatorEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCond', 'operator_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGatewayResponsesByPaymentServiceTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentGatewayResponse', 'payment_service_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGatewayResponsesByTransCodeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentGatewayResponse', 'trans_code_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCategoriesByProductPromoApplEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCategory', 'product_promo_appl_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoActionsByProductPromoActionEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoAction', 'product_promo_action_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPriceCondsByInputParamEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPriceCond', 'input_param_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPriceCondsByOperatorEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPriceCond', 'operator_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geoPointsByGeoPointTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\GeoPoint', 'geo_point_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetsByClassEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAsset', 'class_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleByEmploymentStatusEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Person', 'employment_status_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peopleByResidenceStatusEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Person', 'residence_status_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productKeywordNewsByKeywordTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductKeywordNew', 'keyword_type_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunitiesByTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function giftCardFulfillmentsByTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GiftCardFulfillment', 'type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGeosByProductGeoEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGeo', 'product_geo_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsBySalesChannelEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'sales_channel_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryLinksByLinkTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryLink', 'link_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortsByScopeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffort', 'scope_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotesBySalesChannelEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Quote', 'sales_channel_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilitiesByReplenishMethodEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacility', 'replenish_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilitiesByRequirementMethodEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacility', 'requirement_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByRatingTypeEnum()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'rating_type_enum', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByRequirementMethodEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'requirement_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByVirtualVariantMethodEnum()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'virtual_variant_method_enum', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemDetailsByReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemDetail', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityLocationsByLocationTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityLocation', 'location_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignmentsByDelegateReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortPartyAssignment', 'delegate_reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignmentsByExpectationEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortPartyAssignment', 'expectation_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\EnumerationType', 'enum_type_id', 'enum_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByReserveOrderEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'reserve_order_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByRequirementMethodEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'requirement_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByDefaultSalesChannelEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'default_sales_channel_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByStoreCreditAccountEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'store_credit_account_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviewsByGradeSecuredEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobInterview', 'grade_secured_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobManagerLocksByReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Service\JobManagerLock', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function keywordThesaurusesByRelationshipEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\KeywordThesaurus', 'relationship_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentsByPrivilegeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'privilege_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposeOperationsByPrivilegeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentPurposeOperation', 'privilege_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemChangesByReasonEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemChange', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemChangesByChangeTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemChange', 'change_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTypesByReplenishEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountType', 'replenish_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderNotificationsByEmailType()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderNotification', 'email_type', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorPaymentsByCreditCardEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorPayment', 'credit_card_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByCogsMethodId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'cogs_method_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByInvoiceSequenceEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'invoice_sequence_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByOrderSequenceEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'order_sequence_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByQuoteSequenceEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'quote_sequence_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAcctgPreferencesByTaxFormId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'tax_form_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobRequisitionsByExamTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobRequisition', 'exam_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobRequisitionsByJobPostingTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobRequisition', 'job_posting_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStorePaymentSettingsByPaymentServiceTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStorePaymentSetting', 'payment_service_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreKeywordOvrdsByTargetTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreKeywordOvrd', 'target_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emailTemplateSettingsByEmailType()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\EmailTemplateSetting', 'email_type', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreFinActSettingsByReplenishMethodEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreFinActSetting', 'replenish_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreEmailSettingsByEmailType()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreEmailSetting', 'email_type', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uomConversionDatedsByPurposeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\UomConversionDated', 'purpose_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeVisitsBySourceEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeVisit', 'source_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visualThemeResourcesByResourceTypeEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\VisualThemeResource', 'resource_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLoginSecurityQuestionsByQuestionEnumId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Security\UserLoginSecurityQuestion', 'question_enum_id', 'enum_id');
    }
}

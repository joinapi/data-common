<?php

namespace Joinbiz\Data\Models\Common;

use Joinbiz\Data\Models\Accounting\AcctgTrans;
use Joinbiz\Data\Models\Accounting\AcctgTransEntry;
use Joinbiz\Data\Models\Accounting\BudgetStatus;
use Joinbiz\Data\Models\Accounting\FinAccountStatus;
use Joinbiz\Data\Models\Accounting\FinAccountTrans;
use Joinbiz\Data\Models\Accounting\FixedAssetMaint;
use Joinbiz\Data\Models\Accounting\GlReconciliation;
use Joinbiz\Data\Models\Accounting\Invoice;
use Joinbiz\Data\Models\Accounting\InvoiceStatus;
use Joinbiz\Data\Models\Accounting\PartyFixedAssetAssignment;
use Joinbiz\Data\Models\Accounting\Payment;
use Joinbiz\Data\Models\Content\Content;
use Joinbiz\Data\Models\Content\ContentApproval;
use Joinbiz\Data\Models\Content\ContentPurposeOperation;
use Joinbiz\Data\Models\Content\DataResource;
use Joinbiz\Data\Models\Content\SurveyResponse;
use Joinbiz\Data\Models\Humanres\EmplLeave;
use Joinbiz\Data\Models\Humanres\EmplPosition;
use Joinbiz\Data\Models\Humanres\PartyQual;
use Joinbiz\Data\Models\Marketing\ContactListCommStatus;
use Joinbiz\Data\Models\Marketing\ContactListParty;
use Joinbiz\Data\Models\Marketing\MarketingCampaign;
use Joinbiz\Data\Models\Order\CustRequest;
use Joinbiz\Data\Models\Order\CustRequestItem;
use Joinbiz\Data\Models\Order\CustRequestStatus;
use Joinbiz\Data\Models\Order\OrderDeliverySchedule;
use Joinbiz\Data\Models\Order\OrderHeader;
use Joinbiz\Data\Models\Order\OrderItem;
use Joinbiz\Data\Models\Order\OrderPaymentPreference;
use Joinbiz\Data\Models\Order\OrderStatus;
use Joinbiz\Data\Models\Order\Quote;
use Joinbiz\Data\Models\Order\Requirement;
use Joinbiz\Data\Models\Order\RequirementStatus;
use Joinbiz\Data\Models\Order\ReturnHeader;
use Joinbiz\Data\Models\Order\ReturnItem;
use Joinbiz\Data\Models\Order\ReturnStatus;
use Joinbiz\Data\Models\Party\CommunicationEvent;
use Joinbiz\Data\Models\Party\CommunicationEventRole;
use Joinbiz\Data\Models\Party\Party;
use Joinbiz\Data\Models\Party\PartyInvitation;
use Joinbiz\Data\Models\Party\PartyRelationship;
use Joinbiz\Data\Models\Party\PartyStatus;
use Joinbiz\Data\Models\Product\InventoryItem;
use Joinbiz\Data\Models\Product\InventoryItemStatus;
use Joinbiz\Data\Models\Product\InventoryTransfer;
use Joinbiz\Data\Models\Product\ProductGroupOrder;
use Joinbiz\Data\Models\Product\ProductReview;
use Joinbiz\Data\Models\Product\ProductStore;
use Joinbiz\Data\Models\Service\JobSandbox;
use Joinbiz\Data\Models\Shipment\Picklist;
use Joinbiz\Data\Models\Shipment\PicklistItem;
use Joinbiz\Data\Models\Shipment\PicklistStatusHistory;
use Joinbiz\Data\Models\Shipment\Shipment;
use Joinbiz\Data\Models\Shipment\ShipmentRouteSegment;
use Joinbiz\Data\Models\Shipment\ShipmentStatus;
use Joinbiz\Data\Models\Workeffort\Timesheet;
use Joinbiz\Data\Models\Workeffort\WorkEffort;
use Joinbiz\Data\Models\Workeffort\WorkEffortFixedAssetAssign;
use Joinbiz\Data\Models\Workeffort\WorkEffortGoodStandard;
use Joinbiz\Data\Models\Workeffort\WorkEffortInventoryAssign;
use Joinbiz\Data\Models\Workeffort\WorkEffortPartyAssignment;
use Joinbiz\Data\Models\Workeffort\WorkEffortReview;
use Joinbiz\Data\Models\Workeffort\WorkEffortStatus;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $status_id
 * @property string $status_type_id
 * @property string $status_code
 * @property string $sequence_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyStatus[] $partyStatuses
 * @property ProductReview[] $productReviews
 * @property FinAccountTrans[] $finAccountTrans
 * @property CommunicationEvent[] $communicationEvents
 * @property Payment[] $payments
 * @property OrderHeader[] $orderHeaders
 * @property OrderHeader[] $orderHeadersBySyncStatusId
 * @property OrderPaymentPreference[] $orderPaymentPreferences
 * @property GlReconciliation[] $glReconciliations
 * @property InventoryItem[] $inventoryItems
 * @property PicklistItem[] $picklistItemsByItemStatusId
 * @property StatusValidChange[] $statusValidChanges
 * @property StatusValidChange[] $statusValidChangesByStatusIdTo
 * @property OrderItem[] $orderItems
 * @property OrderItem[] $orderItemsBySyncStatusId
 * @property ProductKeywordNew[] $productKeywordNews
 * @property PicklistStatusHistory[] $picklistStatusHistories
 * @property PicklistStatusHistory[] $picklistStatusHistoriesByStatusIdTo
 * @property MarketingCampaign[] $marketingCampaigns
 * @property CustRequest[] $custRequests
 * @property CustRequestItem[] $custRequestItems
 * @property WorkEffort[] $workEffortsByCurrentStatusId
 * @property Quote[] $quotes
 * @property BudgetStatus[] $budgetStatuses
 * @property Requirement[] $requirements
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByCarrierServiceStatusId
 * @property ContentApproval[] $contentApprovalsByApprovalStatusId
 * @property InventoryItemStatus[] $inventoryItemStatuses
 * @property InventoryTransfer[] $inventoryTransfers
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignmentsByAvailabilityStatusId
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignments
 * @property InvoiceStatus[] $invoiceStatuses
 * @property ShipmentStatus[] $shipmentStatuses
 * @property ProductStore[] $productStoresByDigitalItemApprovedStatus
 * @property ProductStore[] $productStoresByHeaderApprovedStatus
 * @property ProductStore[] $productStoresByHeaderCancelStatus
 * @property ProductStore[] $productStoresByHeaderDeclinedStatus
 * @property ProductStore[] $productStoresByItemApprovedStatus
 * @property ProductStore[] $productStoresByItemCancelStatus
 * @property ProductStore[] $productStoresByItemDeclinedStatus
 * @property ContactListParty[] $contactListParties
 * @property ReturnStatus[] $returnStatuses
 * @property JobSandbox[] $jobSandboxes
 * @property Content[] $contents
 * @property Party[] $parties
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property FinAccountStatus[] $finAccountStatuses
 * @property ContentPurposeOperation[] $contentPurposeOperations
 * @property DataResource[] $dataResources
 * @property RequirementStatus[] $requirementStatuses
 * @property SurveyResponse[] $surveyResponses
 * @property EmplPosition[] $emplPositions
 * @property OrderDeliverySchedule[] $orderDeliverySchedules
 * @property EmplLeave[] $emplLeavesByLeaveStatus
 * @property AcctgTransEntry[] $acctgTransEntriesByReconcileStatusId
 * @property ProductGroupOrder[] $productGroupOrders
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property AcctgTrans[] $acctgTransByGroupStatusId
 * @property OrderStatus[] $orderStatuses
 * @property ReturnItem[] $returnItemsByExpectedItemStatus
 * @property ReturnItem[] $returnItems
 * @property StatusType $statusType
 * @property Shipment[] $shipments
 * @property PartyFixedAssetAssignment[] $partyFixedAssetAssignments
 * @property ReturnHeader[] $returnHeaders
 * @property PartyInvitation[] $partyInvitations
 * @property Picklist[] $picklists
 * @property CustRequestStatus[] $custRequestStatuses
 * @property PartyQual[] $partyQuals
 * @property PartyQual[] $partyQualsByVerifStatusId
 * @property Invoice[] $invoices
 * @property PartyRelationship[] $partyRelationships
 * @property FixedAssetMaint[] $fixedAssetMaints
 * @property WorkEffortStatus[] $workEffortStatuses
 * @property WorkEffortReview[] $workEffortReviews
 * @property WorkEffortInventoryAssign[] $workEffortInventoryAssigns
 * @property WorkEffortGoodStandard[] $workEffortGoodStandards
 * @property WorkEffortFixedAssetAssign[] $workEffortFixedAssetAssignsByAvailabilityStatusId
 * @property WorkEffortFixedAssetAssign[] $workEffortFixedAssetAssigns
 * @property Timesheet[] $timesheets
 */
class StatusItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status_item';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'status_id';

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
    protected $fillable = ['status_type_id', 'status_code', 'sequence_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductReview', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\FinAccountTrans', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CommunicationEvent', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeaders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeader', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeadersBySyncStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeader', 'sync_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderPaymentPreferences()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderPaymentPreference', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glReconciliations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlReconciliation', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklistItemsByItemStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\PicklistItem', 'item_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function statusValidChanges()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\StatusValidChange', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function statusValidChangesByStatusIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\StatusValidChange', 'status_id_to', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemsBySyncStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItem', 'sync_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productKeywordNews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductKeywordNew', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklistStatusHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\PicklistStatusHistory', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklistStatusHistoriesByStatusIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\PicklistStatusHistory', 'status_id_to', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaign', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequests()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortsByCurrentStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffort', 'current_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Quote', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BudgetStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirements()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Requirement', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByCarrierServiceStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'carrier_service_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentApprovalsByApprovalStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentApproval', 'approval_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignmentsByAvailabilityStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortPartyAssignment', 'availability_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignments()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortPartyAssignment', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByDigitalItemApprovedStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'digital_item_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByHeaderApprovedStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'header_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByHeaderCancelStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'header_cancel_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByHeaderDeclinedStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'header_declined_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByItemApprovedStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'item_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByItemCancelStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'item_cancel_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByItemDeclinedStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'item_declined_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListParty', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobSandboxes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Service\JobSandbox', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Party', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListCommStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposeOperations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentPurposeOperation', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResource', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirementStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\RequirementStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyResponses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyResponse', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPosition', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDeliverySchedules()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderDeliverySchedule', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplLeavesByLeaveStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplLeave', 'leave_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntriesByReconcileStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'reconcile_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGroupOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGroupOrder', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventRole', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransByGroupStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTrans', 'group_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnItemsByExpectedItemStatus()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnItem', 'expected_item_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusType', 'status_type_id', 'status_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyFixedAssetAssignments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyFixedAssetAssignment', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeaders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnHeader', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitation', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Picklist', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyQuals()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyQual', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyQualsByVerifStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyQual', 'verif_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRelationships()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRelationship', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetMaint', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortStatus', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortReview', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortInventoryAssigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortInventoryAssign', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortGoodStandards()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortGoodStandard', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortFixedAssetAssignsByAvailabilityStatusId()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortFixedAssetAssign', 'availability_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortFixedAssetAssigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\WorkEffortFixedAssetAssign', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheets()
    {
        return $this->hasMany('Joinbiz\Data\Models\WorkEffort\Timesheet', 'status_id', 'status_id');
    }
}

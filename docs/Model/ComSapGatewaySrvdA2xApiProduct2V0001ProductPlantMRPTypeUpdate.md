# # ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPTypeUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mrp_type** | **string** |  | [optional]
**mrp_responsible** | **string** |  | [optional]
**mrp_group** | **string** |  | [optional]
**reorder_threshold_quantity** | [**\BeLenka\SAP\ProductODV4\Model\ReorderPoint**](ReorderPoint.md) |  | [optional]
**plan_and_order_day_determination** | **string** |  | [optional]
**planning_time_fence** | **string** |  | [optional]
**lot_sizing_procedure** | **string** | Lot Sizing Procedure in Materials Planning | [optional]
**rounding_profile** | **string** |  | [optional]
**lot_size_rounding_quantity** | [**\BeLenka\SAP\ProductODV4\Model\RoundingValue**](RoundingValue.md) |  | [optional]
**minimum_lot_size_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MinimumLotSize**](MinimumLotSize.md) |  | [optional]
**maximum_lot_size_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MaximumLotSize**](MaximumLotSize.md) |  | [optional]
**maximum_stock_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MaximumStockLevel**](MaximumStockLevel.md) |  | [optional]
**assembly_scrap_percent** | [**\BeLenka\SAP\ProductODV4\Model\AssemblyScrap**](AssemblyScrap.md) |  | [optional]
**procurement_sub_type** | **string** | Special Procurement Type | [optional]
**production_invtry_managed_loc** | **string** | Issue Storage Location | [optional]
**dflt_storage_location_ext_procmt** | **string** | Default Storage Location for External Procurement | [optional]
**mrp_planning_calendar** | **string** |  | [optional]
**safety_stock_quantity** | [**\BeLenka\SAP\ProductODV4\Model\SafetyStock**](SafetyStock.md) |  | [optional]
**range_of_cvrg_prfl_code** | **string** | Range-of-Coverage Profile | [optional]
**safety_supply_duration_in_days** | **string** | Safety Time (in Workdays) | [optional]
**fixed_lot_size_quantity** | [**\BeLenka\SAP\ProductODV4\Model\FixedLotSize**](FixedLotSize.md) |  | [optional]
**lot_size_independent_costs** | [**\BeLenka\SAP\ProductODV4\Model\LSIndependentCosts**](LSIndependentCosts.md) |  | [optional]
**storage_costs_percentage_code** | **string** | Storage Costs Percentage Code | [optional]
**product_service_level_in_percent** | [**\BeLenka\SAP\ProductODV4\Model\ServiceLevel**](ServiceLevel.md) |  | [optional]
**is_marked_for_deletion** | **bool** |  | [optional]
**safety_time_period_profile** | **string** | Period Profile for Safety Time | [optional]
**dependent_rqmt_mrp_relevance** | **string** | MRP relevancy for dependent requirements | [optional]
**product_safety_time_mrp_relevance** | **string** | Safety Time Indicator (with or Without Safety Time) | [optional]
**planned_delivery_duration_in_days** | [**\BeLenka\SAP\ProductODV4\Model\PlannedDelivTime**](PlannedDelivTime.md) |  | [optional]
**is_planned_delivery_time** | **bool** | Consider Planned Delivery Time of the MRP Area | [optional]
**rqmt_qty_rcpt_takt_tme_in_wrkg_days** | [**\BeLenka\SAP\ProductODV4\Model\TaktTime**](TaktTime.md) |  | [optional]
**mrp_safety_stock_method** | **string** | MRP Safety Stock Method | [optional]
**currency** | **string** | Currency Key | [optional]
**base_unit** | **string** |  | [optional]
**base_iso_unit** | **string** | Base unit of measure in ISO code | [optional]
**sap__messages** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate[]**](ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_base_quantity** | [**\BeLenka\SAP\ProductODV4\Model\BaseQuantity1**](BaseQuantity1.md) |  | [optional]
**unlimited_over_deliv_is_allowed** | **bool** | Indicator: Unlimited Overdelivery Allowed | [optional]
**over_delivery_tolerance_percent** | [**\BeLenka\SAP\ProductODV4\Model\OverdeliveryToler**](OverdeliveryToler.md) |  | [optional]
**under_delivery_tolerance_percent** | [**\BeLenka\SAP\ProductODV4\Model\UnderdeliveryToler**](UnderdeliveryToler.md) |  | [optional]
**production_invtry_managed_loc** | **string** | Issue Storage Location | [optional]
**production_order_batch_code** | **string** | Determination of batch entry in the production/process order | [optional]
**prod_is_withdrawn_frm_prodn_bin** | **bool** | Indicator: withdrawal of stock from production bin | [optional]
**transition_matrix_products_group** | **string** | Group of Materials for Transition Matrix | [optional]
**order_change_management_profile** | **string** | Overall profile for order change management | [optional]
**product_component_backflush_code** | **string** | Indicator: Backflush | [optional]
**setup_and_teardown_time** | [**\BeLenka\SAP\ProductODV4\Model\SetupTime1**](SetupTime1.md) |  | [optional]
**production_scheduling_profile** | **string** |  | [optional]
**transition_time** | [**\BeLenka\SAP\ProductODV4\Model\Interoperation**](Interoperation.md) |  | [optional]
**processing_time_in_days** | [**\BeLenka\SAP\ProductODV4\Model\ProcessingTime1**](ProcessingTime1.md) |  | [optional]
**production_supervisor** | **string** | Production Supervisor | [optional]
**product_production_quantity_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**prod_production_quantity_iso_unit** | **string** | Production Unit in ISO Code | [optional]
**base_unit** | **string** |  | [optional]
**base_iso_unit** | **string** | Base unit of measure in ISO code | [optional]
**sap__messages** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]**](ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate.md) |  | [optional]
**_product** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate**](ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate.md) |  | [optional]
**_product_plant** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate**](ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

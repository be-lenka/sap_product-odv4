# # ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ewm_storage_type** | **string** |  |
**product_internal_uuid** | **string** | Internal Number (UID) for Product | [optional]
**supply_chain_unit_uuid** | **string** | Supply Chain Unit GUID | [optional]
**ewm_party_entitled_to_dispose_uuid** | **string** | Party Entitled to Dispose (GUID) | [optional]
**ewm_storage_section_method** | **string** | Storage Section Indicator | [optional]
**ewm_storage_bin_type** | **string** |  | [optional]
**ewm_maximum_number_of_bins** | **string** |  | [optional]
**ewm_maximum_storage_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MaximumQuantity**](MaximumQuantity.md) |  | [optional]
**ewm_max_stor_quantity_base_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_max_stor_qty_base_unit_iso_code** | **string** | Base unit of measure in ISO code | [optional]
**ewm_max_stor_quantity_display_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_max_storage_qty_dsp_unit_iso_code** | **string** | ISO Code for Unit of Measurement | [optional]
**ewm_minimum_storage_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MinimumQuantity**](MinimumQuantity.md) |  | [optional]
**ewm_min_stor_quantity_base_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_min_stor_qty_base_unit_iso_code** | **string** | Base unit of measure in ISO code | [optional]
**ewm_min_stor_quantity_display_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_min_storage_qty_dsp_unit_iso_code** | **string** | ISO Code for Unit of Measurement | [optional]
**ewm_min_replnmt_quantity** | [**\BeLenka\SAP\ProductODV4\Model\MinReplenishQty**](MinReplenishQty.md) |  | [optional]
**ewm_min_replnmt_qty_base_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_min_replnmt_qty_bs_unit_iso_code** | **string** | Base unit of measure in ISO code | [optional]
**ewm_min_replnmt_qty_display_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**ewm_min_replnmt_qty_dsp_unit_iso_code** | **string** | ISO Code for Unit of Measurement | [optional]
**ewm_min_stor_qty_of_max_stor_qty_in_pct** | [**\BeLenka\SAP\ProductODV4\Model\MaxMinQty**](MaxMinQty.md) |  | [optional]
**ewm_splt_ptwy_threshold_in_percent** | [**\BeLenka\SAP\ProductODV4\Model\ThrshldAddition**](ThrshldAddition.md) |  | [optional]
**ewm_prod_is_split_on_ptwy** | **bool** |  | [optional]
**ewm_prod_is_skipped_on_ptwy** | **bool** |  | [optional]
**ewm_has_no_replenishment** | **bool** |  | [optional]
**ewm_storage_bin_search_rule** | **string** | Sort Rule for Empty Storage Bin Search | [optional]
**ewm_prod_quantity_classification** | **string** | Quantity Classification in Warehouse | [optional]
**ewm_prod_ptwy_qty_classification** | **string** | Putaway Quantity Classification | [optional]
**ewm_ptwy_sequence** | **string** | Putaway Sequence | [optional]
**sap__messages** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]**](ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate.md) |  | [optional]
**_product** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate**](ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate.md) |  | [optional]
**_product_ewm_warehouse** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate**](ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

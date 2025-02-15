# # ComSapGatewaySrvdA2xApiProduct2V0001ProductType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | Product Number | [optional]
**product_type** | **string** |  | [optional]
**creation_date** | **\DateTime** |  | [optional]
**creation_time** | **string** | Time of Creation | [optional]
**creation_date_time** | **\DateTime** | Product Created On | [optional]
**created_by_user** | **string** | Name of Person Responsible for Creating the Object | [optional]
**last_change_date** | **\DateTime** | Date of Last Change | [optional]
**last_changed_by_user** | **string** | Name of Person Who Changed Object | [optional]
**is_marked_for_deletion** | **bool** | Deletion Indicator | [optional]
**cross_plant_status** | **string** | Cross-Plant Product Status | [optional]
**cross_plant_status_validity_date** | **\DateTime** | Date from which the cross-plant material status is valid | [optional]
**product_old_id** | **string** |  | [optional]
**gross_weight** | [**\BeLenka\SAP\ProductODV4\Model\GrossWeight**](GrossWeight.md) |  | [optional]
**weight_unit** | **string** |  | [optional]
**weight_iso_unit** | **string** | Unit of weight in ISO code | [optional]
**product_group** | **string** |  | [optional]
**base_unit** | **string** | Base Unit of Measure - No Conversion Routine | [optional]
**base_iso_unit** | **string** | Base unit of measure in ISO code | [optional]
**item_category_group** | **string** | General item category group | [optional]
**net_weight** | [**\BeLenka\SAP\ProductODV4\Model\NetWeight**](NetWeight.md) |  | [optional]
**division** | **string** |  | [optional]
**volume_unit** | **string** |  | [optional]
**volume_iso_unit** | **string** | Volume unit in ISO code | [optional]
**product_volume** | [**\BeLenka\SAP\ProductODV4\Model\Volume**](Volume.md) |  | [optional]
**authorization_group** | **string** |  | [optional]
**anp_code** | **string** |  | [optional]
**size_or_dimension_text** | **string** |  | [optional]
**industry_standard_name** | **string** | Industry Standard Description (such as ANSI or ISO) | [optional]
**product_standard_id** | **string** | Global Trade Item Number (EAN/UPC/GTIN) | [optional]
**international_article_number_cat** | **string** | Category of International Article Number (EAN) | [optional]
**product_is_configurable** | **bool** | Product is Configurable | [optional]
**is_batch_management_required** | **bool** | Batch Management Requirement Indicator | [optional]
**external_product_group** | **string** | External Product Group | [optional]
**cross_plant_configurable_product** | **string** | Cross-Plant Configurable Product | [optional]
**serial_no_explicitness_level** | **string** | Level of Explicitness for Serial Number | [optional]
**is_approved_batch_record_reqd** | **bool** | Approved Batch Record Required | [optional]
**handling_indicator** | **string** |  | [optional]
**warehouse_product_group** | **string** | Warehouse Material Group | [optional]
**warehouse_storage_condition** | **string** | Warehouse Storage Condition | [optional]
**standard_handling_unit_type** | **string** |  | [optional]
**serial_number_profile** | **string** | Serial Number Profile | [optional]
**is_pilferable** | **bool** |  | [optional]
**is_relevant_for_hzds_substances** | **bool** | Relevant for Hazardous Substances | [optional]
**quarantine_period** | [**\BeLenka\SAP\ProductODV4\Model\QuarantPer**](QuarantPer.md) |  | [optional]
**time_unit_for_quarantine_period** | **string** | Time Unit for Quarantine Period | [optional]
**quarantine_period_iso_unit** | **string** | Time Unit for Quarantine Time in ISO Code | [optional]
**quality_inspection_group** | **string** | Quality Inspection Group | [optional]
**handling_unit_type** | **string** |  | [optional]
**has_variable_tare_weight** | **bool** | Variable Tare Weight | [optional]
**maximum_packaging_length** | [**\BeLenka\SAP\ProductODV4\Model\MaxPackLength**](MaxPackLength.md) |  | [optional]
**maximum_packaging_width** | [**\BeLenka\SAP\ProductODV4\Model\MaxPackWidth**](MaxPackWidth.md) |  | [optional]
**maximum_packaging_height** | [**\BeLenka\SAP\ProductODV4\Model\MaxPackHeight**](MaxPackHeight.md) |  | [optional]
**maximum_capacity** | [**\BeLenka\SAP\ProductODV4\Model\MaximumCapacity**](MaximumCapacity.md) |  | [optional]
**overcapacity_tolerance** | [**\BeLenka\SAP\ProductODV4\Model\OvercapacityToler**](OvercapacityToler.md) |  | [optional]
**unit_for_max_packaging_dimensions** | **string** | Unit of Measure for Maximum Packing Length/Width/Height | [optional]
**max_packgg_dimension_iso_unit** | **string** | Unit for Maximum Packing Length/Width/Height in ISO Code | [optional]
**base_unit_specific_product_length** | [**\BeLenka\SAP\ProductODV4\Model\Length**](Length.md) |  | [optional]
**base_unit_specific_product_width** | [**\BeLenka\SAP\ProductODV4\Model\Width**](Width.md) |  | [optional]
**base_unit_specific_product_height** | [**\BeLenka\SAP\ProductODV4\Model\Height**](Height.md) |  | [optional]
**product_measurement_unit** | **string** | Unit of Dimension for Length/Width/Height | [optional]
**product_measurement_iso_unit** | **string** | Unit for length/breadth/height in ISO code | [optional]
**article_category** | **string** |  | [optional]
**industry_sector** | **string** |  | [optional]
**last_change_date_time** | **\DateTime** | Change Time Stamp | [optional]
**last_change_time** | **string** | Time of Last Change | [optional]
**dangerous_goods_ind_profile** | **string** | Dangerous Goods Indicator Profile | [optional]
**product_document_change_number** | **string** | Document change number (without document management system) | [optional]
**product_document_page_count** | **string** | Number Of Sheets (without Document Management system) | [optional]
**product_document_page_number** | **string** | Page Number of document (without Document Management system) | [optional]
**document_is_created_by_cad** | **bool** |  | [optional]
**production_or_inspection_memo_txt** | **string** | Production/inspection memo | [optional]
**production_memo_page_format** | **string** | Page Format of Production Memo | [optional]
**product_is_highly_viscous** | **bool** | Indicator: Highly Viscous | [optional]
**transport_is_in_bulk** | **bool** | Indicator: In Bulk/Liquid | [optional]
**prod_effcty_param_vals_are_assigned** | **bool** | Assign effectivity parameter values/ override change numbers | [optional]
**prod_is_environmentally_relevant** | **bool** | Environmentally Relevant | [optional]
**laboratory_or_design_office** | **string** | Laboratory/Design Office | [optional]
**packaging_product_group** | **string** | Material Group: Packaging Materials | [optional]
**packing_reference_product** | **string** | Reference Material for Materials Packed in Same Way | [optional]
**basic_product** | **string** |  | [optional]
**product_document_number** | **string** | Document number (without document management system) | [optional]
**product_document_version** | **string** | Document version (without Document Management system) | [optional]
**product_document_type** | **string** | Document type (without Document Management system) | [optional]
**product_document_page_format** | **string** | Page Format of Document (without Document Management system) | [optional]
**prod_chml_cmplnc_relevance_code** | **string** |  | [optional]
**discount_in_kind_eligibility** | **string** | Material qualifies for discount in kind | [optional]
**product_manufacturer_number** | **string** | Manufacturer Part Number | [optional]
**manufacturer_number** | **string** | Number of a Manufacturer | [optional]
**manufacturer_part_profile** | **string** |  | [optional]
**own_inventory_managed_product** | **string** | Number of firm&#39;s own (internal) inventory-managed material | [optional]
**sap__messages** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage[]**](ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage.md) |  | [optional]
**_product_change_master** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterType.md) |  | [optional]
**_product_description** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionType.md) |  | [optional]
**_product_ewm_warehouse** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType.md) |  | [optional]
**_product_plant** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType.md) |  | [optional]
**_product_procurement** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementType**](ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementType.md) |  | [optional]
**_product_quality_management** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementType**](ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementType.md) |  | [optional]
**_product_sales** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesType**](ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesType.md) |  | [optional]
**_product_sales_delivery** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType.md) |  | [optional]
**_product_storage** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageType**](ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageType.md) |  | [optional]
**_product_unit_of_measure** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType.md) |  | [optional]
**_product_valuation** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType[]**](ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

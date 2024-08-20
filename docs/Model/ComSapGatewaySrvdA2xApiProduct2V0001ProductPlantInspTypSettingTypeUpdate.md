# # ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingTypeUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**insp_lot_is_task_list_required** | **bool** | Inspection with Task List | [optional]
**insp_lot_has_material_spec** | **bool** | Inspect with Material Specification | [optional]
**insp_lot_has_confign_specification** | **bool** | Inspection Specifications from Configuration | [optional]
**insp_lot_has_batch_charc** | **bool** | Inspection Specifications from Batch Determination | [optional]
**insp_lot_has_autom_spec_assgmt** | **bool** | Automatic Specification Assignment | [optional]
**insp_lot_has_charc** | **bool** | Inspect by Characteristics | [optional]
**has_post_to_inspection_stock** | **bool** | Post to Inspection Stock | [optional]
**insp_lot_is_autom_usge_dcsn_possible** | **bool** | Automatic Usage Decision Planned | [optional]
**sampling_procedure** | **string** |  | [optional]
**insp_lot_dynamic_rule** | **string** | Dynamic Modification Rule | [optional]
**insp_lot_sample_quantity_in_percent** | [**\BeLenka\SAP\ProductODV4\Model\InspPercentage**](InspPercentage.md) |  | [optional]
**inspection_lot_is_full_inspection** | **bool** |  | [optional]
**insp_lot_skip_is_allowed** | **bool** |  | [optional]
**insp_lot_has_manual_sample_size** | **bool** | Enter Sample Manually | [optional]
**insp_lot_is_smpl_calc_mnl_triggered** | **bool** | Trigger Sample Calculation Manually | [optional]
**insp_lot_is_serial_nmbr_possible** | **bool** | Serial Numbers Possible for Inspection Lot | [optional]
**insp_lot_duration_in_days** | [**\BeLenka\SAP\ProductODV4\Model\AvgInspDuration**](AvgInspDuration.md) |  | [optional]
**insp_lot_summary_control** | **string** | Control of Inspection Lot Creation (Lot Summary) | [optional]
**insp_quality_score_procedure** | **string** | Procedure for Calculating Quality Score | [optional]
**insp_lot_accepted_scrap_ratio_in_pct** | [**\BeLenka\SAP\ProductODV4\Model\AllowedScrapShare**](AllowedScrapShare.md) |  | [optional]
**inspection_lot_has_appraisal_costs** | **bool** | Record Appraisal Costs in Individual QM Order | [optional]
**quality_cost_collector** | **string** | Order Number for Recording Appraisal Costs | [optional]
**prod_insp_type_setting_is_active** | **bool** | Inspection Type - Material Combination Is Active | [optional]
**insp_type_is_prfrd** | **bool** | Preferred Inspection Type | [optional]
**insp_lot_has_handling_unit** | **bool** | Inspection for Handling Unit | [optional]
**insp_lot_has_multiple_spec** | **bool** | Indicator: Multiple Specifications | [optional]
**insp_lot_of_ewm_summary_control** | **string** | Inspection Lot Summary (Warehouse-Managed Stock) | [optional]
**sap__messages** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate[]**](ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# OpenAPIClient-php

The service supports following operations: GET, POST, PUT, PATCH, DELETE. You can create, read, update, and delete product master data at the entity level.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\BatchRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->batchPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestsApi->batchPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchRequestsApi* | [**batchPost**](docs/Api/BatchRequestsApi.md#batchpost) | **POST** /$batch | Send a group of requests
*InspectionTypeSettingsApi* | [**productPlantInspTypeSettingGet**](docs/Api/InspectionTypeSettingsApi.md#productplantinsptypesettingget) | **GET** /ProductPlantInspTypeSetting | Get entities from ProductPlantInspTypeSetting
*InspectionTypeSettingsApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantGet**](docs/Api/InspectionTypeSettingsApi.md#productplantinsptypesettinginspectionlottypeproductplantget) | **GET** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant} | Get entity from ProductPlantInspTypeSetting by key
*InspectionTypeSettingsApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantPatch**](docs/Api/InspectionTypeSettingsApi.md#productplantinsptypesettinginspectionlottypeproductplantpatch) | **PATCH** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant} | Update entity in ProductPlantInspTypeSetting
*InspectionTypeSettingsApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantProductGet**](docs/Api/InspectionTypeSettingsApi.md#productplantinsptypesettinginspectionlottypeproductplantproductget) | **GET** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant}/_Product | Get related _Product
*InspectionTypeSettingsApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantProductPlantGet**](docs/Api/InspectionTypeSettingsApi.md#productplantinsptypesettinginspectionlottypeproductplantproductplantget) | **GET** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*InspectionTypeSettingsApi* | [**productPlantProductPlantProductPlantInspTypeSettingGet**](docs/Api/InspectionTypeSettingsApi.md#productplantproductplantproductplantinsptypesettingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantInspTypeSetting | Get entities from related _ProductPlantInspTypeSetting
*InspectionTypeSettingsApi* | [**productPlantProductPlantProductPlantInspTypeSettingPost**](docs/Api/InspectionTypeSettingsApi.md#productplantproductplantproductplantinsptypesettingpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantInspTypeSetting | Add new entity to related _ProductPlantInspTypeSetting
*ProductApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet**](docs/Api/ProductApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlproductget) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product
*ProductApi* | [**productChangeMasterProductChangeNumberProductGet**](docs/Api/ProductApi.md#productchangemasterproductchangenumberproductget) | **GET** /ProductChangeMaster/{Product}/{ChangeNumber}/_Product | Get related _Product
*ProductApi* | [**productDescriptionProductLanguageProductGet**](docs/Api/ProductApi.md#productdescriptionproductlanguageproductget) | **GET** /ProductDescription/{Product}/{Language}/_Product | Get related _Product
*ProductApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet**](docs/Api/ProductApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypeproductget) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_Product | Get related _Product
*ProductApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet**](docs/Api/ProductApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductget) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_Product | Get related _Product
*ProductApi* | [**productGet**](docs/Api/ProductApi.md#productget) | **GET** /Product | Get entities from Product
*ProductApi* | [**productPlantCostingProductPlantProductGet**](docs/Api/ProductApi.md#productplantcostingproductplantproductget) | **GET** /ProductPlantCosting/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantForecastProductPlantProductGet**](docs/Api/ProductApi.md#productplantforecastproductplantproductget) | **GET** /ProductPlantForecast/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantProductGet**](docs/Api/ProductApi.md#productplantinsptypesettinginspectionlottypeproductplantproductget) | **GET** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantInternationalTradeProductPlantProductGet**](docs/Api/ProductApi.md#productplantinternationaltradeproductplantproductget) | **GET** /ProductPlantInternationalTrade/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantMRPProductMRPAreaPlantProductGet**](docs/Api/ProductApi.md#productplantmrpproductmrpareaplantproductget) | **GET** /ProductPlantMRP/{Product}/{MRPArea}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantPlanningProductPlantProductGet**](docs/Api/ProductApi.md#productplantplanningproductplantproductget) | **GET** /ProductPlantPlanning/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantProcurementProductPlantProductGet**](docs/Api/ProductApi.md#productplantprocurementproductplantproductget) | **GET** /ProductPlantProcurement/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantProductPlantProductGet**](docs/Api/ProductApi.md#productplantproductplantproductget) | **GET** /ProductPlant/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryProductGet**](docs/Api/ProductApi.md#productplantpurchasetaxproductplantdeparturecountryproductget) | **GET** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry}/_Product | Get related _Product
*ProductApi* | [**productPlantQualityManagementProductPlantProductGet**](docs/Api/ProductApi.md#productplantqualitymanagementproductplantproductget) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantSalesProductPlantProductGet**](docs/Api/ProductApi.md#productplantsalesproductplantproductget) | **GET** /ProductPlantSales/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantStorageLocationProductPlantStorageLocationProductGet**](docs/Api/ProductApi.md#productplantstoragelocationproductplantstoragelocationproductget) | **GET** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation}/_Product | Get related _Product
*ProductApi* | [**productPlantStorageProductPlantProductGet**](docs/Api/ProductApi.md#productplantstorageproductplantproductget) | **GET** /ProductPlantStorage/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantSupplyPlanningProductPlantProductGet**](docs/Api/ProductApi.md#productplantsupplyplanningproductplantproductget) | **GET** /ProductPlantSupplyPlanning/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPlantWorkSchedulingProductPlantProductGet**](docs/Api/ProductApi.md#productplantworkschedulingproductplantproductget) | **GET** /ProductPlantWorkScheduling/{Product}/{Plant}/_Product | Get related _Product
*ProductApi* | [**productPost**](docs/Api/ProductApi.md#productpost) | **POST** /Product | Add new entity to Product
*ProductApi* | [**productProcurementProductProductGet**](docs/Api/ProductApi.md#productprocurementproductproductget) | **GET** /ProductProcurement/{Product}/_Product | Get related _Product
*ProductApi* | [**productProductGet**](docs/Api/ProductApi.md#productproductget) | **GET** /Product/{Product} | Get entity from Product by key
*ProductApi* | [**productProductPatch**](docs/Api/ProductApi.md#productproductpatch) | **PATCH** /Product/{Product} | Update entity in Product
*ProductApi* | [**productProductProductChangeMasterGet**](docs/Api/ProductApi.md#productproductproductchangemasterget) | **GET** /Product/{Product}/_ProductChangeMaster | Get entities from related _ProductChangeMaster
*ProductApi* | [**productProductProductChangeMasterPost**](docs/Api/ProductApi.md#productproductproductchangemasterpost) | **POST** /Product/{Product}/_ProductChangeMaster | Add new entity to related _ProductChangeMaster
*ProductApi* | [**productProductProductDescriptionGet**](docs/Api/ProductApi.md#productproductproductdescriptionget) | **GET** /Product/{Product}/_ProductDescription | Get entities from related _ProductDescription
*ProductApi* | [**productProductProductDescriptionPost**](docs/Api/ProductApi.md#productproductproductdescriptionpost) | **POST** /Product/{Product}/_ProductDescription | Add new entity to related _ProductDescription
*ProductApi* | [**productProductProductEWMWarehouseGet**](docs/Api/ProductApi.md#productproductproductewmwarehouseget) | **GET** /Product/{Product}/_ProductEWMWarehouse | Get entities from related _ProductEWMWarehouse
*ProductApi* | [**productProductProductEWMWarehousePost**](docs/Api/ProductApi.md#productproductproductewmwarehousepost) | **POST** /Product/{Product}/_ProductEWMWarehouse | Add new entity to related _ProductEWMWarehouse
*ProductApi* | [**productProductProductPlantGet**](docs/Api/ProductApi.md#productproductproductplantget) | **GET** /Product/{Product}/_ProductPlant | Get entities from related _ProductPlant
*ProductApi* | [**productProductProductPlantPost**](docs/Api/ProductApi.md#productproductproductplantpost) | **POST** /Product/{Product}/_ProductPlant | Add new entity to related _ProductPlant
*ProductApi* | [**productProductProductProcurementGet**](docs/Api/ProductApi.md#productproductproductprocurementget) | **GET** /Product/{Product}/_ProductProcurement | Get related _ProductProcurement
*ProductApi* | [**productProductProductQualityManagementGet**](docs/Api/ProductApi.md#productproductproductqualitymanagementget) | **GET** /Product/{Product}/_ProductQualityManagement | Get related _ProductQualityManagement
*ProductApi* | [**productProductProductSalesDeliveryGet**](docs/Api/ProductApi.md#productproductproductsalesdeliveryget) | **GET** /Product/{Product}/_ProductSalesDelivery | Get entities from related _ProductSalesDelivery
*ProductApi* | [**productProductProductSalesDeliveryPost**](docs/Api/ProductApi.md#productproductproductsalesdeliverypost) | **POST** /Product/{Product}/_ProductSalesDelivery | Add new entity to related _ProductSalesDelivery
*ProductApi* | [**productProductProductSalesGet**](docs/Api/ProductApi.md#productproductproductsalesget) | **GET** /Product/{Product}/_ProductSales | Get related _ProductSales
*ProductApi* | [**productProductProductStorageGet**](docs/Api/ProductApi.md#productproductproductstorageget) | **GET** /Product/{Product}/_ProductStorage | Get related _ProductStorage
*ProductApi* | [**productProductProductUnitOfMeasureGet**](docs/Api/ProductApi.md#productproductproductunitofmeasureget) | **GET** /Product/{Product}/_ProductUnitOfMeasure | Get entities from related _ProductUnitOfMeasure
*ProductApi* | [**productProductProductUnitOfMeasurePost**](docs/Api/ProductApi.md#productproductproductunitofmeasurepost) | **POST** /Product/{Product}/_ProductUnitOfMeasure | Add new entity to related _ProductUnitOfMeasure
*ProductApi* | [**productProductProductValuationGet**](docs/Api/ProductApi.md#productproductproductvaluationget) | **GET** /Product/{Product}/_ProductValuation | Get entities from related _ProductValuation
*ProductApi* | [**productProductProductValuationPost**](docs/Api/ProductApi.md#productproductproductvaluationpost) | **POST** /Product/{Product}/_ProductValuation | Add new entity to related _ProductValuation
*ProductApi* | [**productQualityManagementProductProductGet**](docs/Api/ProductApi.md#productqualitymanagementproductproductget) | **GET** /ProductQualityManagement/{Product}/_Product | Get related _Product
*ProductApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet**](docs/Api/ProductApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlproductget) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product
*ProductApi* | [**productSalesProductProductGet**](docs/Api/ProductApi.md#productsalesproductproductget) | **GET** /ProductSales/{Product}/_Product | Get related _Product
*ProductApi* | [**productStorageProductProductGet**](docs/Api/ProductApi.md#productstorageproductproductget) | **GET** /ProductStorage/{Product}/_Product | Get related _Product
*ProductApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet**](docs/Api/ProductApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberproductget) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_Product | Get related _Product
*ProductApi* | [**productUnitOfMeasureProductAlternativeUnitProductGet**](docs/Api/ProductApi.md#productunitofmeasureproductalternativeunitproductget) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_Product | Get related _Product
*ProductApi* | [**productValuationAccountingProductValuationAreaValuationTypeProductGet**](docs/Api/ProductApi.md#productvaluationaccountingproductvaluationareavaluationtypeproductget) | **GET** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductApi* | [**productValuationCostingProductValuationAreaValuationTypeProductGet**](docs/Api/ProductApi.md#productvaluationcostingproductvaluationareavaluationtypeproductget) | **GET** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet**](docs/Api/ProductApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerproductget) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product
*ProductApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet**](docs/Api/ProductApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerproductget) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product
*ProductApi* | [**productValuationProductValuationAreaValuationTypeProductGet**](docs/Api/ProductApi.md#productvaluationproductvaluationareavaluationtypeproductget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductChangeMasterApi* | [**productChangeMasterGet**](docs/Api/ProductChangeMasterApi.md#productchangemasterget) | **GET** /ProductChangeMaster | Get entities from ProductChangeMaster
*ProductChangeMasterApi* | [**productChangeMasterProductChangeNumberGet**](docs/Api/ProductChangeMasterApi.md#productchangemasterproductchangenumberget) | **GET** /ProductChangeMaster/{Product}/{ChangeNumber} | Get entity from ProductChangeMaster by key
*ProductChangeMasterApi* | [**productChangeMasterProductChangeNumberProductGet**](docs/Api/ProductChangeMasterApi.md#productchangemasterproductchangenumberproductget) | **GET** /ProductChangeMaster/{Product}/{ChangeNumber}/_Product | Get related _Product
*ProductChangeMasterApi* | [**productProductProductChangeMasterGet**](docs/Api/ProductChangeMasterApi.md#productproductproductchangemasterget) | **GET** /Product/{Product}/_ProductChangeMaster | Get entities from related _ProductChangeMaster
*ProductChangeMasterApi* | [**productProductProductChangeMasterPost**](docs/Api/ProductChangeMasterApi.md#productproductproductchangemasterpost) | **POST** /Product/{Product}/_ProductChangeMaster | Add new entity to related _ProductChangeMaster
*ProductDescriptionApi* | [**productDescriptionGet**](docs/Api/ProductDescriptionApi.md#productdescriptionget) | **GET** /ProductDescription | Get entities from ProductDescription
*ProductDescriptionApi* | [**productDescriptionProductLanguageDelete**](docs/Api/ProductDescriptionApi.md#productdescriptionproductlanguagedelete) | **DELETE** /ProductDescription/{Product}/{Language} | Delete entity from ProductDescription
*ProductDescriptionApi* | [**productDescriptionProductLanguageGet**](docs/Api/ProductDescriptionApi.md#productdescriptionproductlanguageget) | **GET** /ProductDescription/{Product}/{Language} | Get entity from ProductDescription by key
*ProductDescriptionApi* | [**productDescriptionProductLanguagePatch**](docs/Api/ProductDescriptionApi.md#productdescriptionproductlanguagepatch) | **PATCH** /ProductDescription/{Product}/{Language} | Update entity in ProductDescription
*ProductDescriptionApi* | [**productDescriptionProductLanguageProductGet**](docs/Api/ProductDescriptionApi.md#productdescriptionproductlanguageproductget) | **GET** /ProductDescription/{Product}/{Language}/_Product | Get related _Product
*ProductDescriptionApi* | [**productProductProductDescriptionGet**](docs/Api/ProductDescriptionApi.md#productproductproductdescriptionget) | **GET** /Product/{Product}/_ProductDescription | Get entities from related _ProductDescription
*ProductDescriptionApi* | [**productProductProductDescriptionPost**](docs/Api/ProductDescriptionApi.md#productproductproductdescriptionpost) | **POST** /Product/{Product}/_ProductDescription | Add new entity to related _ProductDescription
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeGet**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeget) | **GET** /ProductEWMStorageType | Get entities from ProductEWMStorageType
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypedelete) | **DELETE** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Delete entity from ProductEWMStorageType
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypeget) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Get entity from ProductEWMStorageType by key
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypepatch) | **PATCH** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Update entity in ProductEWMStorageType
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypeproductewmwarehouseget) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_ProductEWMWarehouse | Get related _ProductEWMWarehouse
*ProductEWMStorageTypeApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet**](docs/Api/ProductEWMStorageTypeApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypeproductget) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_Product | Get related _Product
*ProductEWMStorageTypeApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet**](docs/Api/ProductEWMStorageTypeApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductewmstoragetypeget) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Get entities from related _ProductEWMStorageType
*ProductEWMStorageTypeApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost**](docs/Api/ProductEWMStorageTypeApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductewmstoragetypepost) | **POST** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Add new entity to related _ProductEWMStorageType
*ProductEWMWarehouseApi* | [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet**](docs/Api/ProductEWMWarehouseApi.md#productewmstoragetypeproductewmwarehouseentitledtodisposepartyewmstoragetypeproductewmwarehouseget) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_ProductEWMWarehouse | Get related _ProductEWMWarehouse
*ProductEWMWarehouseApi* | [**productEWMWarehouseGet**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseget) | **GET** /ProductEWMWarehouse | Get entities from ProductEWMWarehouse
*ProductEWMWarehouseApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyget) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty} | Get entity from ProductEWMWarehouse by key
*ProductEWMWarehouseApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartypatch) | **PATCH** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty} | Update entity in ProductEWMWarehouse
*ProductEWMWarehouseApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductewmstoragetypeget) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Get entities from related _ProductEWMStorageType
*ProductEWMWarehouseApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductewmstoragetypepost) | **POST** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Add new entity to related _ProductEWMStorageType
*ProductEWMWarehouseApi* | [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet**](docs/Api/ProductEWMWarehouseApi.md#productewmwarehouseproductewmwarehouseentitledtodisposepartyproductget) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_Product | Get related _Product
*ProductEWMWarehouseApi* | [**productProductProductEWMWarehouseGet**](docs/Api/ProductEWMWarehouseApi.md#productproductproductewmwarehouseget) | **GET** /Product/{Product}/_ProductEWMWarehouse | Get entities from related _ProductEWMWarehouse
*ProductEWMWarehouseApi* | [**productProductProductEWMWarehousePost**](docs/Api/ProductEWMWarehouseApi.md#productproductproductewmwarehousepost) | **POST** /Product/{Product}/_ProductEWMWarehouse | Add new entity to related _ProductEWMWarehouse
*ProductPlantApi* | [**productPlantCostingProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantcostingproductplantproductplantget) | **GET** /ProductPlantCosting/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantForecastProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantforecastproductplantproductplantget) | **GET** /ProductPlantForecast/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantGet**](docs/Api/ProductPlantApi.md#productplantget) | **GET** /ProductPlant | Get entities from ProductPlant
*ProductPlantApi* | [**productPlantInspTypeSettingInspectionLotTypeProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantinsptypesettinginspectionlottypeproductplantproductplantget) | **GET** /ProductPlantInspTypeSetting/{InspectionLotType}/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantInternationalTradeProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantinternationaltradeproductplantproductplantget) | **GET** /ProductPlantInternationalTrade/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantMRPProductMRPAreaPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantmrpproductmrpareaplantproductplantget) | **GET** /ProductPlantMRP/{Product}/{MRPArea}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantPlanningProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantplanningproductplantproductplantget) | **GET** /ProductPlantPlanning/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantProcurementProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantprocurementproductplantproductplantget) | **GET** /ProductPlantProcurement/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantproductplantget) | **GET** /ProductPlant/{Product}/{Plant} | Get entity from ProductPlant by key
*ProductPlantApi* | [**productPlantProductPlantPatch**](docs/Api/ProductPlantApi.md#productplantproductplantpatch) | **PATCH** /ProductPlant/{Product}/{Plant} | Update entity in ProductPlant
*ProductPlantApi* | [**productPlantProductPlantProdPlantInternationalTradeGet**](docs/Api/ProductPlantApi.md#productplantproductplantprodplantinternationaltradeget) | **GET** /ProductPlant/{Product}/{Plant}/_ProdPlantInternationalTrade | Get related _ProdPlantInternationalTrade
*ProductPlantApi* | [**productPlantProductPlantProductGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductget) | **GET** /ProductPlant/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantApi* | [**productPlantProductPlantProductPlantCostingGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantcostingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantCosting | Get related _ProductPlantCosting
*ProductPlantApi* | [**productPlantProductPlantProductPlantForecastGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantforecastget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantForecast | Get related _ProductPlantForecast
*ProductPlantApi* | [**productPlantProductPlantProductPlantInspTypeSettingGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantinsptypesettingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantInspTypeSetting | Get entities from related _ProductPlantInspTypeSetting
*ProductPlantApi* | [**productPlantProductPlantProductPlantInspTypeSettingPost**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantinsptypesettingpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantInspTypeSetting | Add new entity to related _ProductPlantInspTypeSetting
*ProductPlantApi* | [**productPlantProductPlantProductPlantMRPGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantmrpget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantMRP | Get entities from related _ProductPlantMRP
*ProductPlantApi* | [**productPlantProductPlantProductPlantMRPPost**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantmrppost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantMRP | Add new entity to related _ProductPlantMRP
*ProductPlantApi* | [**productPlantProductPlantProductPlantPlanningGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantplanningget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantPlanning | Get related _ProductPlantPlanning
*ProductPlantApi* | [**productPlantProductPlantProductPlantProcurementGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantprocurementget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantProcurement | Get related _ProductPlantProcurement
*ProductPlantApi* | [**productPlantProductPlantProductPlantPurchaseTaxGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantpurchasetaxget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantPurchaseTax | Get entities from related _ProductPlantPurchaseTax
*ProductPlantApi* | [**productPlantProductPlantProductPlantPurchaseTaxPost**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantpurchasetaxpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantPurchaseTax | Add new entity to related _ProductPlantPurchaseTax
*ProductPlantApi* | [**productPlantProductPlantProductPlantQualityManagementGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantqualitymanagementget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantQualityManagement | Get related _ProductPlantQualityManagement
*ProductPlantApi* | [**productPlantProductPlantProductPlantSalesGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantsalesget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantSales | Get related _ProductPlantSales
*ProductPlantApi* | [**productPlantProductPlantProductPlantStorageGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantstorageget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantStorage | Get related _ProductPlantStorage
*ProductPlantApi* | [**productPlantProductPlantProductPlantStorageLocationGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantstoragelocationget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantStorageLocation | Get entities from related _ProductPlantStorageLocation
*ProductPlantApi* | [**productPlantProductPlantProductPlantStorageLocationPost**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantstoragelocationpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantStorageLocation | Add new entity to related _ProductPlantStorageLocation
*ProductPlantApi* | [**productPlantProductPlantProductPlantSupplyPlanningGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantsupplyplanningget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantSupplyPlanning | Get related _ProductPlantSupplyPlanning
*ProductPlantApi* | [**productPlantProductPlantProductPlantWorkSchedulingGet**](docs/Api/ProductPlantApi.md#productplantproductplantproductplantworkschedulingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantWorkScheduling | Get related _ProductPlantWorkScheduling
*ProductPlantApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryProductPlantGet**](docs/Api/ProductPlantApi.md#productplantpurchasetaxproductplantdeparturecountryproductplantget) | **GET** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantQualityManagementProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantqualitymanagementproductplantproductplantget) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantSalesProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantsalesproductplantproductplantget) | **GET** /ProductPlantSales/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantStorageLocationProductPlantStorageLocationProductPlantGet**](docs/Api/ProductPlantApi.md#productplantstoragelocationproductplantstoragelocationproductplantget) | **GET** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantStorageProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantstorageproductplantproductplantget) | **GET** /ProductPlantStorage/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantSupplyPlanningProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantsupplyplanningproductplantproductplantget) | **GET** /ProductPlantSupplyPlanning/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productPlantWorkSchedulingProductPlantProductPlantGet**](docs/Api/ProductPlantApi.md#productplantworkschedulingproductplantproductplantget) | **GET** /ProductPlantWorkScheduling/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantApi* | [**productProductProductPlantGet**](docs/Api/ProductPlantApi.md#productproductproductplantget) | **GET** /Product/{Product}/_ProductPlant | Get entities from related _ProductPlant
*ProductPlantApi* | [**productProductProductPlantPost**](docs/Api/ProductPlantApi.md#productproductproductplantpost) | **POST** /Product/{Product}/_ProductPlant | Add new entity to related _ProductPlant
*ProductPlantCostingApi* | [**productPlantCostingGet**](docs/Api/ProductPlantCostingApi.md#productplantcostingget) | **GET** /ProductPlantCosting | Get entities from ProductPlantCosting
*ProductPlantCostingApi* | [**productPlantCostingProductPlantGet**](docs/Api/ProductPlantCostingApi.md#productplantcostingproductplantget) | **GET** /ProductPlantCosting/{Product}/{Plant} | Get entity from ProductPlantCosting by key
*ProductPlantCostingApi* | [**productPlantCostingProductPlantPatch**](docs/Api/ProductPlantCostingApi.md#productplantcostingproductplantpatch) | **PATCH** /ProductPlantCosting/{Product}/{Plant} | Update entity in ProductPlantCosting
*ProductPlantCostingApi* | [**productPlantCostingProductPlantProductGet**](docs/Api/ProductPlantCostingApi.md#productplantcostingproductplantproductget) | **GET** /ProductPlantCosting/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantCostingApi* | [**productPlantCostingProductPlantProductPlantGet**](docs/Api/ProductPlantCostingApi.md#productplantcostingproductplantproductplantget) | **GET** /ProductPlantCosting/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantCostingApi* | [**productPlantProductPlantProductPlantCostingGet**](docs/Api/ProductPlantCostingApi.md#productplantproductplantproductplantcostingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantCosting | Get related _ProductPlantCosting
*ProductPlantForecastApi* | [**productPlantForecastGet**](docs/Api/ProductPlantForecastApi.md#productplantforecastget) | **GET** /ProductPlantForecast | Get entities from ProductPlantForecast
*ProductPlantForecastApi* | [**productPlantForecastProductPlantGet**](docs/Api/ProductPlantForecastApi.md#productplantforecastproductplantget) | **GET** /ProductPlantForecast/{Product}/{Plant} | Get entity from ProductPlantForecast by key
*ProductPlantForecastApi* | [**productPlantForecastProductPlantPatch**](docs/Api/ProductPlantForecastApi.md#productplantforecastproductplantpatch) | **PATCH** /ProductPlantForecast/{Product}/{Plant} | Update entity in ProductPlantForecast
*ProductPlantForecastApi* | [**productPlantForecastProductPlantProductGet**](docs/Api/ProductPlantForecastApi.md#productplantforecastproductplantproductget) | **GET** /ProductPlantForecast/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantForecastApi* | [**productPlantForecastProductPlantProductPlantGet**](docs/Api/ProductPlantForecastApi.md#productplantforecastproductplantproductplantget) | **GET** /ProductPlantForecast/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantForecastApi* | [**productPlantProductPlantProductPlantForecastGet**](docs/Api/ProductPlantForecastApi.md#productplantproductplantproductplantforecastget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantForecast | Get related _ProductPlantForecast
*ProductPlantInternationalTradeApi* | [**productPlantInternationalTradeGet**](docs/Api/ProductPlantInternationalTradeApi.md#productplantinternationaltradeget) | **GET** /ProductPlantInternationalTrade | Get entities from ProductPlantInternationalTrade
*ProductPlantInternationalTradeApi* | [**productPlantInternationalTradeProductPlantGet**](docs/Api/ProductPlantInternationalTradeApi.md#productplantinternationaltradeproductplantget) | **GET** /ProductPlantInternationalTrade/{Product}/{Plant} | Get entity from ProductPlantInternationalTrade by key
*ProductPlantInternationalTradeApi* | [**productPlantInternationalTradeProductPlantPatch**](docs/Api/ProductPlantInternationalTradeApi.md#productplantinternationaltradeproductplantpatch) | **PATCH** /ProductPlantInternationalTrade/{Product}/{Plant} | Update entity in ProductPlantInternationalTrade
*ProductPlantInternationalTradeApi* | [**productPlantInternationalTradeProductPlantProductGet**](docs/Api/ProductPlantInternationalTradeApi.md#productplantinternationaltradeproductplantproductget) | **GET** /ProductPlantInternationalTrade/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantInternationalTradeApi* | [**productPlantInternationalTradeProductPlantProductPlantGet**](docs/Api/ProductPlantInternationalTradeApi.md#productplantinternationaltradeproductplantproductplantget) | **GET** /ProductPlantInternationalTrade/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantInternationalTradeApi* | [**productPlantProductPlantProdPlantInternationalTradeGet**](docs/Api/ProductPlantInternationalTradeApi.md#productplantproductplantprodplantinternationaltradeget) | **GET** /ProductPlant/{Product}/{Plant}/_ProdPlantInternationalTrade | Get related _ProdPlantInternationalTrade
*ProductPlantMRPApi* | [**productPlantMRPGet**](docs/Api/ProductPlantMRPApi.md#productplantmrpget) | **GET** /ProductPlantMRP | Get entities from ProductPlantMRP
*ProductPlantMRPApi* | [**productPlantMRPProductMRPAreaPlantGet**](docs/Api/ProductPlantMRPApi.md#productplantmrpproductmrpareaplantget) | **GET** /ProductPlantMRP/{Product}/{MRPArea}/{Plant} | Get entity from ProductPlantMRP by key
*ProductPlantMRPApi* | [**productPlantMRPProductMRPAreaPlantPatch**](docs/Api/ProductPlantMRPApi.md#productplantmrpproductmrpareaplantpatch) | **PATCH** /ProductPlantMRP/{Product}/{MRPArea}/{Plant} | Update entity in ProductPlantMRP
*ProductPlantMRPApi* | [**productPlantMRPProductMRPAreaPlantProductGet**](docs/Api/ProductPlantMRPApi.md#productplantmrpproductmrpareaplantproductget) | **GET** /ProductPlantMRP/{Product}/{MRPArea}/{Plant}/_Product | Get related _Product
*ProductPlantMRPApi* | [**productPlantMRPProductMRPAreaPlantProductPlantGet**](docs/Api/ProductPlantMRPApi.md#productplantmrpproductmrpareaplantproductplantget) | **GET** /ProductPlantMRP/{Product}/{MRPArea}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantMRPApi* | [**productPlantProductPlantProductPlantMRPGet**](docs/Api/ProductPlantMRPApi.md#productplantproductplantproductplantmrpget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantMRP | Get entities from related _ProductPlantMRP
*ProductPlantMRPApi* | [**productPlantProductPlantProductPlantMRPPost**](docs/Api/ProductPlantMRPApi.md#productplantproductplantproductplantmrppost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantMRP | Add new entity to related _ProductPlantMRP
*ProductPlantPlanningApi* | [**productPlantPlanningGet**](docs/Api/ProductPlantPlanningApi.md#productplantplanningget) | **GET** /ProductPlantPlanning | Get entities from ProductPlantPlanning
*ProductPlantPlanningApi* | [**productPlantPlanningProductPlantGet**](docs/Api/ProductPlantPlanningApi.md#productplantplanningproductplantget) | **GET** /ProductPlantPlanning/{Product}/{Plant} | Get entity from ProductPlantPlanning by key
*ProductPlantPlanningApi* | [**productPlantPlanningProductPlantPatch**](docs/Api/ProductPlantPlanningApi.md#productplantplanningproductplantpatch) | **PATCH** /ProductPlantPlanning/{Product}/{Plant} | Update entity in ProductPlantPlanning
*ProductPlantPlanningApi* | [**productPlantPlanningProductPlantProductGet**](docs/Api/ProductPlantPlanningApi.md#productplantplanningproductplantproductget) | **GET** /ProductPlantPlanning/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantPlanningApi* | [**productPlantPlanningProductPlantProductPlantGet**](docs/Api/ProductPlantPlanningApi.md#productplantplanningproductplantproductplantget) | **GET** /ProductPlantPlanning/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantPlanningApi* | [**productPlantProductPlantProductPlantPlanningGet**](docs/Api/ProductPlantPlanningApi.md#productplantproductplantproductplantplanningget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantPlanning | Get related _ProductPlantPlanning
*ProductPlantProcurementApi* | [**productPlantProcurementGet**](docs/Api/ProductPlantProcurementApi.md#productplantprocurementget) | **GET** /ProductPlantProcurement | Get entities from ProductPlantProcurement
*ProductPlantProcurementApi* | [**productPlantProcurementProductPlantGet**](docs/Api/ProductPlantProcurementApi.md#productplantprocurementproductplantget) | **GET** /ProductPlantProcurement/{Product}/{Plant} | Get entity from ProductPlantProcurement by key
*ProductPlantProcurementApi* | [**productPlantProcurementProductPlantPatch**](docs/Api/ProductPlantProcurementApi.md#productplantprocurementproductplantpatch) | **PATCH** /ProductPlantProcurement/{Product}/{Plant} | Update entity in ProductPlantProcurement
*ProductPlantProcurementApi* | [**productPlantProcurementProductPlantProductGet**](docs/Api/ProductPlantProcurementApi.md#productplantprocurementproductplantproductget) | **GET** /ProductPlantProcurement/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantProcurementApi* | [**productPlantProcurementProductPlantProductPlantGet**](docs/Api/ProductPlantProcurementApi.md#productplantprocurementproductplantproductplantget) | **GET** /ProductPlantProcurement/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantProcurementApi* | [**productPlantProductPlantProductPlantProcurementGet**](docs/Api/ProductPlantProcurementApi.md#productplantproductplantproductplantprocurementget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantProcurement | Get related _ProductPlantProcurement
*ProductPlantPurchaseTaxApi* | [**productPlantProductPlantProductPlantPurchaseTaxGet**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantproductplantproductplantpurchasetaxget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantPurchaseTax | Get entities from related _ProductPlantPurchaseTax
*ProductPlantPurchaseTaxApi* | [**productPlantProductPlantProductPlantPurchaseTaxPost**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantproductplantproductplantpurchasetaxpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantPurchaseTax | Add new entity to related _ProductPlantPurchaseTax
*ProductPlantPurchaseTaxApi* | [**productPlantPurchaseTaxGet**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantpurchasetaxget) | **GET** /ProductPlantPurchaseTax | Get entities from ProductPlantPurchaseTax
*ProductPlantPurchaseTaxApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryGet**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantpurchasetaxproductplantdeparturecountryget) | **GET** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry} | Get entity from ProductPlantPurchaseTax by key
*ProductPlantPurchaseTaxApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryPatch**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantpurchasetaxproductplantdeparturecountrypatch) | **PATCH** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry} | Update entity in ProductPlantPurchaseTax
*ProductPlantPurchaseTaxApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryProductGet**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantpurchasetaxproductplantdeparturecountryproductget) | **GET** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry}/_Product | Get related _Product
*ProductPlantPurchaseTaxApi* | [**productPlantPurchaseTaxProductPlantDepartureCountryProductPlantGet**](docs/Api/ProductPlantPurchaseTaxApi.md#productplantpurchasetaxproductplantdeparturecountryproductplantget) | **GET** /ProductPlantPurchaseTax/{Product}/{Plant}/{DepartureCountry}/_ProductPlant | Get related _ProductPlant
*ProductPlantQualityManagementApi* | [**productPlantProductPlantProductPlantQualityManagementGet**](docs/Api/ProductPlantQualityManagementApi.md#productplantproductplantproductplantqualitymanagementget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantQualityManagement | Get related _ProductPlantQualityManagement
*ProductPlantQualityManagementApi* | [**productPlantQualityManagementGet**](docs/Api/ProductPlantQualityManagementApi.md#productplantqualitymanagementget) | **GET** /ProductPlantQualityManagement | Get entities from ProductPlantQualityManagement
*ProductPlantQualityManagementApi* | [**productPlantQualityManagementProductPlantGet**](docs/Api/ProductPlantQualityManagementApi.md#productplantqualitymanagementproductplantget) | **GET** /ProductPlantQualityManagement/{Product}/{Plant} | Get entity from ProductPlantQualityManagement by key
*ProductPlantQualityManagementApi* | [**productPlantQualityManagementProductPlantPatch**](docs/Api/ProductPlantQualityManagementApi.md#productplantqualitymanagementproductplantpatch) | **PATCH** /ProductPlantQualityManagement/{Product}/{Plant} | Update entity in ProductPlantQualityManagement
*ProductPlantQualityManagementApi* | [**productPlantQualityManagementProductPlantProductGet**](docs/Api/ProductPlantQualityManagementApi.md#productplantqualitymanagementproductplantproductget) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantQualityManagementApi* | [**productPlantQualityManagementProductPlantProductPlantGet**](docs/Api/ProductPlantQualityManagementApi.md#productplantqualitymanagementproductplantproductplantget) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantSalesApi* | [**productPlantProductPlantProductPlantSalesGet**](docs/Api/ProductPlantSalesApi.md#productplantproductplantproductplantsalesget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantSales | Get related _ProductPlantSales
*ProductPlantSalesApi* | [**productPlantSalesGet**](docs/Api/ProductPlantSalesApi.md#productplantsalesget) | **GET** /ProductPlantSales | Get entities from ProductPlantSales
*ProductPlantSalesApi* | [**productPlantSalesProductPlantGet**](docs/Api/ProductPlantSalesApi.md#productplantsalesproductplantget) | **GET** /ProductPlantSales/{Product}/{Plant} | Get entity from ProductPlantSales by key
*ProductPlantSalesApi* | [**productPlantSalesProductPlantPatch**](docs/Api/ProductPlantSalesApi.md#productplantsalesproductplantpatch) | **PATCH** /ProductPlantSales/{Product}/{Plant} | Update entity in ProductPlantSales
*ProductPlantSalesApi* | [**productPlantSalesProductPlantProductGet**](docs/Api/ProductPlantSalesApi.md#productplantsalesproductplantproductget) | **GET** /ProductPlantSales/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantSalesApi* | [**productPlantSalesProductPlantProductPlantGet**](docs/Api/ProductPlantSalesApi.md#productplantsalesproductplantproductplantget) | **GET** /ProductPlantSales/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantStorageApi* | [**productPlantProductPlantProductPlantStorageGet**](docs/Api/ProductPlantStorageApi.md#productplantproductplantproductplantstorageget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantStorage | Get related _ProductPlantStorage
*ProductPlantStorageApi* | [**productPlantStorageGet**](docs/Api/ProductPlantStorageApi.md#productplantstorageget) | **GET** /ProductPlantStorage | Get entities from ProductPlantStorage
*ProductPlantStorageApi* | [**productPlantStorageProductPlantGet**](docs/Api/ProductPlantStorageApi.md#productplantstorageproductplantget) | **GET** /ProductPlantStorage/{Product}/{Plant} | Get entity from ProductPlantStorage by key
*ProductPlantStorageApi* | [**productPlantStorageProductPlantPatch**](docs/Api/ProductPlantStorageApi.md#productplantstorageproductplantpatch) | **PATCH** /ProductPlantStorage/{Product}/{Plant} | Update entity in ProductPlantStorage
*ProductPlantStorageApi* | [**productPlantStorageProductPlantProductGet**](docs/Api/ProductPlantStorageApi.md#productplantstorageproductplantproductget) | **GET** /ProductPlantStorage/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantStorageApi* | [**productPlantStorageProductPlantProductPlantGet**](docs/Api/ProductPlantStorageApi.md#productplantstorageproductplantproductplantget) | **GET** /ProductPlantStorage/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantStorageLocationApi* | [**productPlantProductPlantProductPlantStorageLocationGet**](docs/Api/ProductPlantStorageLocationApi.md#productplantproductplantproductplantstoragelocationget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantStorageLocation | Get entities from related _ProductPlantStorageLocation
*ProductPlantStorageLocationApi* | [**productPlantProductPlantProductPlantStorageLocationPost**](docs/Api/ProductPlantStorageLocationApi.md#productplantproductplantproductplantstoragelocationpost) | **POST** /ProductPlant/{Product}/{Plant}/_ProductPlantStorageLocation | Add new entity to related _ProductPlantStorageLocation
*ProductPlantStorageLocationApi* | [**productPlantStorageLocationGet**](docs/Api/ProductPlantStorageLocationApi.md#productplantstoragelocationget) | **GET** /ProductPlantStorageLocation | Get entities from ProductPlantStorageLocation
*ProductPlantStorageLocationApi* | [**productPlantStorageLocationProductPlantStorageLocationGet**](docs/Api/ProductPlantStorageLocationApi.md#productplantstoragelocationproductplantstoragelocationget) | **GET** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation} | Get entity from ProductPlantStorageLocation by key
*ProductPlantStorageLocationApi* | [**productPlantStorageLocationProductPlantStorageLocationPatch**](docs/Api/ProductPlantStorageLocationApi.md#productplantstoragelocationproductplantstoragelocationpatch) | **PATCH** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation} | Update entity in ProductPlantStorageLocation
*ProductPlantStorageLocationApi* | [**productPlantStorageLocationProductPlantStorageLocationProductGet**](docs/Api/ProductPlantStorageLocationApi.md#productplantstoragelocationproductplantstoragelocationproductget) | **GET** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation}/_Product | Get related _Product
*ProductPlantStorageLocationApi* | [**productPlantStorageLocationProductPlantStorageLocationProductPlantGet**](docs/Api/ProductPlantStorageLocationApi.md#productplantstoragelocationproductplantstoragelocationproductplantget) | **GET** /ProductPlantStorageLocation/{Product}/{Plant}/{StorageLocation}/_ProductPlant | Get related _ProductPlant
*ProductPlantSupplyPlanningApi* | [**productPlantProductPlantProductPlantSupplyPlanningGet**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantproductplantproductplantsupplyplanningget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantSupplyPlanning | Get related _ProductPlantSupplyPlanning
*ProductPlantSupplyPlanningApi* | [**productPlantSupplyPlanningGet**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantsupplyplanningget) | **GET** /ProductPlantSupplyPlanning | Get entities from ProductPlantSupplyPlanning
*ProductPlantSupplyPlanningApi* | [**productPlantSupplyPlanningProductPlantGet**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantsupplyplanningproductplantget) | **GET** /ProductPlantSupplyPlanning/{Product}/{Plant} | Get entity from ProductPlantSupplyPlanning by key
*ProductPlantSupplyPlanningApi* | [**productPlantSupplyPlanningProductPlantPatch**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantsupplyplanningproductplantpatch) | **PATCH** /ProductPlantSupplyPlanning/{Product}/{Plant} | Update entity in ProductPlantSupplyPlanning
*ProductPlantSupplyPlanningApi* | [**productPlantSupplyPlanningProductPlantProductGet**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantsupplyplanningproductplantproductget) | **GET** /ProductPlantSupplyPlanning/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantSupplyPlanningApi* | [**productPlantSupplyPlanningProductPlantProductPlantGet**](docs/Api/ProductPlantSupplyPlanningApi.md#productplantsupplyplanningproductplantproductplantget) | **GET** /ProductPlantSupplyPlanning/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductPlantWorkSchedulingApi* | [**productPlantProductPlantProductPlantWorkSchedulingGet**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantproductplantproductplantworkschedulingget) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantWorkScheduling | Get related _ProductPlantWorkScheduling
*ProductPlantWorkSchedulingApi* | [**productPlantWorkSchedulingGet**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantworkschedulingget) | **GET** /ProductPlantWorkScheduling | Get entities from ProductPlantWorkScheduling
*ProductPlantWorkSchedulingApi* | [**productPlantWorkSchedulingProductPlantGet**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantworkschedulingproductplantget) | **GET** /ProductPlantWorkScheduling/{Product}/{Plant} | Get entity from ProductPlantWorkScheduling by key
*ProductPlantWorkSchedulingApi* | [**productPlantWorkSchedulingProductPlantPatch**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantworkschedulingproductplantpatch) | **PATCH** /ProductPlantWorkScheduling/{Product}/{Plant} | Update entity in ProductPlantWorkScheduling
*ProductPlantWorkSchedulingApi* | [**productPlantWorkSchedulingProductPlantProductGet**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantworkschedulingproductplantproductget) | **GET** /ProductPlantWorkScheduling/{Product}/{Plant}/_Product | Get related _Product
*ProductPlantWorkSchedulingApi* | [**productPlantWorkSchedulingProductPlantProductPlantGet**](docs/Api/ProductPlantWorkSchedulingApi.md#productplantworkschedulingproductplantproductplantget) | **GET** /ProductPlantWorkScheduling/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant
*ProductProcurementApi* | [**productProcurementGet**](docs/Api/ProductProcurementApi.md#productprocurementget) | **GET** /ProductProcurement | Get entities from ProductProcurement
*ProductProcurementApi* | [**productProcurementProductGet**](docs/Api/ProductProcurementApi.md#productprocurementproductget) | **GET** /ProductProcurement/{Product} | Get entity from ProductProcurement by key
*ProductProcurementApi* | [**productProcurementProductPatch**](docs/Api/ProductProcurementApi.md#productprocurementproductpatch) | **PATCH** /ProductProcurement/{Product} | Update entity in ProductProcurement
*ProductProcurementApi* | [**productProcurementProductProductGet**](docs/Api/ProductProcurementApi.md#productprocurementproductproductget) | **GET** /ProductProcurement/{Product}/_Product | Get related _Product
*ProductProcurementApi* | [**productProductProductProcurementGet**](docs/Api/ProductProcurementApi.md#productproductproductprocurementget) | **GET** /Product/{Product}/_ProductProcurement | Get related _ProductProcurement
*ProductQualityManagementApi* | [**productProductProductQualityManagementGet**](docs/Api/ProductQualityManagementApi.md#productproductproductqualitymanagementget) | **GET** /Product/{Product}/_ProductQualityManagement | Get related _ProductQualityManagement
*ProductQualityManagementApi* | [**productQualityManagementGet**](docs/Api/ProductQualityManagementApi.md#productqualitymanagementget) | **GET** /ProductQualityManagement | Get entities from ProductQualityManagement
*ProductQualityManagementApi* | [**productQualityManagementProductGet**](docs/Api/ProductQualityManagementApi.md#productqualitymanagementproductget) | **GET** /ProductQualityManagement/{Product} | Get entity from ProductQualityManagement by key
*ProductQualityManagementApi* | [**productQualityManagementProductPatch**](docs/Api/ProductQualityManagementApi.md#productqualitymanagementproductpatch) | **PATCH** /ProductQualityManagement/{Product} | Update entity in ProductQualityManagement
*ProductQualityManagementApi* | [**productQualityManagementProductProductGet**](docs/Api/ProductQualityManagementApi.md#productqualitymanagementproductproductget) | **GET** /ProductQualityManagement/{Product}/_Product | Get related _Product
*ProductSalesApi* | [**productProductProductSalesGet**](docs/Api/ProductSalesApi.md#productproductproductsalesget) | **GET** /Product/{Product}/_ProductSales | Get related _ProductSales
*ProductSalesApi* | [**productSalesGet**](docs/Api/ProductSalesApi.md#productsalesget) | **GET** /ProductSales | Get entities from ProductSales
*ProductSalesApi* | [**productSalesProductGet**](docs/Api/ProductSalesApi.md#productsalesproductget) | **GET** /ProductSales/{Product} | Get entity from ProductSales by key
*ProductSalesApi* | [**productSalesProductPatch**](docs/Api/ProductSalesApi.md#productsalesproductpatch) | **PATCH** /ProductSales/{Product} | Update entity in ProductSales
*ProductSalesApi* | [**productSalesProductProductGet**](docs/Api/ProductSalesApi.md#productsalesproductproductget) | **GET** /ProductSales/{Product}/_Product | Get related _Product
*ProductSalesDeliveryApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet**](docs/Api/ProductSalesDeliveryApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlproductsalesdeliveryget) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProductSalesDelivery | Get related _ProductSalesDelivery
*ProductSalesDeliveryApi* | [**productProductProductSalesDeliveryGet**](docs/Api/ProductSalesDeliveryApi.md#productproductproductsalesdeliveryget) | **GET** /Product/{Product}/_ProductSalesDelivery | Get entities from related _ProductSalesDelivery
*ProductSalesDeliveryApi* | [**productProductProductSalesDeliveryPost**](docs/Api/ProductSalesDeliveryApi.md#productproductproductsalesdeliverypost) | **POST** /Product/{Product}/_ProductSalesDelivery | Add new entity to related _ProductSalesDelivery
*ProductSalesDeliveryApi* | [**productSalesDeliveryGet**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryget) | **GET** /ProductSalesDelivery | Get entities from ProductSalesDelivery
*ProductSalesDeliveryApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlget) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl} | Get entity from ProductSalesDelivery by key
*ProductSalesDeliveryApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlpatch) | **PATCH** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl} | Update entity in ProductSalesDelivery
*ProductSalesDeliveryApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlprodsalesdeliverysalestaxget) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Get entities from related _ProdSalesDeliverySalesTax
*ProductSalesDeliveryApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlprodsalesdeliverysalestaxpost) | **POST** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Add new entity to related _ProdSalesDeliverySalesTax
*ProductSalesDeliveryApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet**](docs/Api/ProductSalesDeliveryApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlproductget) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product
*ProductSalesDeliverySalesTaxApi* | [**prodSalesDeliverySalesTaxGet**](docs/Api/ProductSalesDeliverySalesTaxApi.md#prodsalesdeliverysalestaxget) | **GET** /ProdSalesDeliverySalesTax | Get entities from ProdSalesDeliverySalesTax
*ProductSalesDeliverySalesTaxApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet**](docs/Api/ProductSalesDeliverySalesTaxApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlget) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl} | Get entity from ProdSalesDeliverySalesTax by key
*ProductSalesDeliverySalesTaxApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch**](docs/Api/ProductSalesDeliverySalesTaxApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlpatch) | **PATCH** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl} | Update entity in ProdSalesDeliverySalesTax
*ProductSalesDeliverySalesTaxApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet**](docs/Api/ProductSalesDeliverySalesTaxApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlproductget) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product
*ProductSalesDeliverySalesTaxApi* | [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet**](docs/Api/ProductSalesDeliverySalesTaxApi.md#prodsalesdeliverysalestaxproductcountryproductsalestaxcategoryproductsalesorgproductdistributionchnlproductsalesdeliveryget) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProductSalesDelivery | Get related _ProductSalesDelivery
*ProductSalesDeliverySalesTaxApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet**](docs/Api/ProductSalesDeliverySalesTaxApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlprodsalesdeliverysalestaxget) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Get entities from related _ProdSalesDeliverySalesTax
*ProductSalesDeliverySalesTaxApi* | [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost**](docs/Api/ProductSalesDeliverySalesTaxApi.md#productsalesdeliveryproductproductsalesorgproductdistributionchnlprodsalesdeliverysalestaxpost) | **POST** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Add new entity to related _ProdSalesDeliverySalesTax
*ProductStorageApi* | [**productProductProductStorageGet**](docs/Api/ProductStorageApi.md#productproductproductstorageget) | **GET** /Product/{Product}/_ProductStorage | Get related _ProductStorage
*ProductStorageApi* | [**productStorageGet**](docs/Api/ProductStorageApi.md#productstorageget) | **GET** /ProductStorage | Get entities from ProductStorage
*ProductStorageApi* | [**productStorageProductGet**](docs/Api/ProductStorageApi.md#productstorageproductget) | **GET** /ProductStorage/{Product} | Get entity from ProductStorage by key
*ProductStorageApi* | [**productStorageProductPatch**](docs/Api/ProductStorageApi.md#productstorageproductpatch) | **PATCH** /ProductStorage/{Product} | Update entity in ProductStorage
*ProductStorageApi* | [**productStorageProductProductGet**](docs/Api/ProductStorageApi.md#productstorageproductproductget) | **GET** /ProductStorage/{Product}/_Product | Get related _Product
*ProductUnitOfMeasureApi* | [**productProductProductUnitOfMeasureGet**](docs/Api/ProductUnitOfMeasureApi.md#productproductproductunitofmeasureget) | **GET** /Product/{Product}/_ProductUnitOfMeasure | Get entities from related _ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productProductProductUnitOfMeasurePost**](docs/Api/ProductUnitOfMeasureApi.md#productproductproductunitofmeasurepost) | **POST** /Product/{Product}/_ProductUnitOfMeasure | Add new entity to related _ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberproductunitofmeasureget) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_ProductUnitOfMeasure | Get related _ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureGet**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureget) | **GET** /ProductUnitOfMeasure | Get entities from ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitDelete**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitdelete) | **DELETE** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Delete entity from ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitGet**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitget) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Get entity from ProductUnitOfMeasure by key
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitPatch**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitpatch) | **PATCH** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Update entity in ProductUnitOfMeasure
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitProductGet**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitproductget) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_Product | Get related _Product
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitproductunitofmeasureeanget) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Get entities from related _ProductUnitOfMeasureEAN
*ProductUnitOfMeasureApi* | [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost**](docs/Api/ProductUnitOfMeasureApi.md#productunitofmeasureproductalternativeunitproductunitofmeasureeanpost) | **POST** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Add new entity to related _ProductUnitOfMeasureEAN
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANGet**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanget) | **GET** /ProductUnitOfMeasureEAN | Get entities from ProductUnitOfMeasureEAN
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberdelete) | **DELETE** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Delete entity from ProductUnitOfMeasureEAN
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberget) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Get entity from ProductUnitOfMeasureEAN by key
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberpatch) | **PATCH** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Update entity in ProductUnitOfMeasureEAN
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberproductget) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_Product | Get related _Product
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureeanproductalternativeunitconsecutivenumberproductunitofmeasureget) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_ProductUnitOfMeasure | Get related _ProductUnitOfMeasure
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureproductalternativeunitproductunitofmeasureeanget) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Get entities from related _ProductUnitOfMeasureEAN
*ProductUnitOfMeasureEANApi* | [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost**](docs/Api/ProductUnitOfMeasureEANApi.md#productunitofmeasureproductalternativeunitproductunitofmeasureeanpost) | **POST** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Add new entity to related _ProductUnitOfMeasureEAN
*ProductValuationApi* | [**productProductProductValuationGet**](docs/Api/ProductValuationApi.md#productproductproductvaluationget) | **GET** /Product/{Product}/_ProductValuation | Get entities from related _ProductValuation
*ProductValuationApi* | [**productProductProductValuationPost**](docs/Api/ProductValuationApi.md#productproductproductvaluationpost) | **POST** /Product/{Product}/_ProductValuation | Add new entity to related _ProductValuation
*ProductValuationApi* | [**productValuationAccountingProductValuationAreaValuationTypeProductValuationGet**](docs/Api/ProductValuationApi.md#productvaluationaccountingproductvaluationareavaluationtypeproductvaluationget) | **GET** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType}/_ProductValuation | Get related _ProductValuation
*ProductValuationApi* | [**productValuationCostingProductValuationAreaValuationTypeProductValuationGet**](docs/Api/ProductValuationApi.md#productvaluationcostingproductvaluationareavaluationtypeproductvaluationget) | **GET** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType}/_ProductValuation | Get related _ProductValuation
*ProductValuationApi* | [**productValuationGet**](docs/Api/ProductValuationApi.md#productvaluationget) | **GET** /ProductValuation | Get entities from ProductValuation
*ProductValuationApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet**](docs/Api/ProductValuationApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerproductvaluationget) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation
*ProductValuationApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet**](docs/Api/ProductValuationApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerproductvaluationget) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType} | Get entity from ProductValuation by key
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypePatch**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypepatch) | **PATCH** /ProductValuation/{Product}/{ValuationArea}/{ValuationType} | Update entity in ProductValuation
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationAccountingGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationaccountingget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationAccounting | Get related _ProductValuationAccounting
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationCostingGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationcostingget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationCosting | Get related _ProductValuationCosting
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgeraccountget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Get entities from related _ProductValuationLedgerAccount
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgeraccountpost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Add new entity to related _ProductValuationLedgerAccount
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgerpricesget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Get entities from related _ProductValuationLedgerPrices
*ProductValuationApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost**](docs/Api/ProductValuationApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgerpricespost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Add new entity to related _ProductValuationLedgerPrices
*ProductValuationAccountingApi* | [**productValuationAccountingGet**](docs/Api/ProductValuationAccountingApi.md#productvaluationaccountingget) | **GET** /ProductValuationAccounting | Get entities from ProductValuationAccounting
*ProductValuationAccountingApi* | [**productValuationAccountingProductValuationAreaValuationTypeGet**](docs/Api/ProductValuationAccountingApi.md#productvaluationaccountingproductvaluationareavaluationtypeget) | **GET** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType} | Get entity from ProductValuationAccounting by key
*ProductValuationAccountingApi* | [**productValuationAccountingProductValuationAreaValuationTypePatch**](docs/Api/ProductValuationAccountingApi.md#productvaluationaccountingproductvaluationareavaluationtypepatch) | **PATCH** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType} | Update entity in ProductValuationAccounting
*ProductValuationAccountingApi* | [**productValuationAccountingProductValuationAreaValuationTypeProductGet**](docs/Api/ProductValuationAccountingApi.md#productvaluationaccountingproductvaluationareavaluationtypeproductget) | **GET** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductValuationAccountingApi* | [**productValuationAccountingProductValuationAreaValuationTypeProductValuationGet**](docs/Api/ProductValuationAccountingApi.md#productvaluationaccountingproductvaluationareavaluationtypeproductvaluationget) | **GET** /ProductValuationAccounting/{Product}/{ValuationArea}/{ValuationType}/_ProductValuation | Get related _ProductValuation
*ProductValuationAccountingApi* | [**productValuationProductValuationAreaValuationTypeProductValuationAccountingGet**](docs/Api/ProductValuationAccountingApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationaccountingget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationAccounting | Get related _ProductValuationAccounting
*ProductValuationCostingApi* | [**productValuationCostingGet**](docs/Api/ProductValuationCostingApi.md#productvaluationcostingget) | **GET** /ProductValuationCosting | Get entities from ProductValuationCosting
*ProductValuationCostingApi* | [**productValuationCostingProductValuationAreaValuationTypeGet**](docs/Api/ProductValuationCostingApi.md#productvaluationcostingproductvaluationareavaluationtypeget) | **GET** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType} | Get entity from ProductValuationCosting by key
*ProductValuationCostingApi* | [**productValuationCostingProductValuationAreaValuationTypePatch**](docs/Api/ProductValuationCostingApi.md#productvaluationcostingproductvaluationareavaluationtypepatch) | **PATCH** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType} | Update entity in ProductValuationCosting
*ProductValuationCostingApi* | [**productValuationCostingProductValuationAreaValuationTypeProductGet**](docs/Api/ProductValuationCostingApi.md#productvaluationcostingproductvaluationareavaluationtypeproductget) | **GET** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType}/_Product | Get related _Product
*ProductValuationCostingApi* | [**productValuationCostingProductValuationAreaValuationTypeProductValuationGet**](docs/Api/ProductValuationCostingApi.md#productvaluationcostingproductvaluationareavaluationtypeproductvaluationget) | **GET** /ProductValuationCosting/{Product}/{ValuationArea}/{ValuationType}/_ProductValuation | Get related _ProductValuation
*ProductValuationCostingApi* | [**productValuationProductValuationAreaValuationTypeProductValuationCostingGet**](docs/Api/ProductValuationCostingApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationcostingget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationCosting | Get related _ProductValuationCosting
*ProductValuationLedgerAccountApi* | [**productValuationLedgerAccountGet**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationledgeraccountget) | **GET** /ProductValuationLedgerAccount | Get entities from ProductValuationLedgerAccount
*ProductValuationLedgerAccountApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerget) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Get entity from ProductValuationLedgerAccount by key
*ProductValuationLedgerAccountApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerpatch) | **PATCH** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Update entity in ProductValuationLedgerAccount
*ProductValuationLedgerAccountApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerproductget) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product
*ProductValuationLedgerAccountApi* | [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationledgeraccountproductvaluationareavaluationtypecurrencyroleledgerproductvaluationget) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation
*ProductValuationLedgerAccountApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgeraccountget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Get entities from related _ProductValuationLedgerAccount
*ProductValuationLedgerAccountApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost**](docs/Api/ProductValuationLedgerAccountApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgeraccountpost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Add new entity to related _ProductValuationLedgerAccount
*ProductValuationLedgerPricesApi* | [**productValuationLedgerPricesGet**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationledgerpricesget) | **GET** /ProductValuationLedgerPrices | Get entities from ProductValuationLedgerPrices
*ProductValuationLedgerPricesApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerget) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Get entity from ProductValuationLedgerPrices by key
*ProductValuationLedgerPricesApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerpatch) | **PATCH** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Update entity in ProductValuationLedgerPrices
*ProductValuationLedgerPricesApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerproductget) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product
*ProductValuationLedgerPricesApi* | [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationledgerpricesproductvaluationareavaluationtypecurrencyroleledgerproductvaluationget) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation
*ProductValuationLedgerPricesApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgerpricesget) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Get entities from related _ProductValuationLedgerPrices
*ProductValuationLedgerPricesApi* | [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost**](docs/Api/ProductValuationLedgerPricesApi.md#productvaluationproductvaluationareavaluationtypeproductvaluationledgerpricespost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Add new entity to related _ProductValuationLedgerPrices

## Models

- [AllowedPkgWt](docs/Model/AllowedPkgWt.md)
- [AllowedScrapShare](docs/Model/AllowedScrapShare.md)
- [AllowedVolume](docs/Model/AllowedVolume.md)
- [AssemblyScrap](docs/Model/AssemblyScrap.md)
- [AvailabilityCheckHorizon](docs/Model/AvailabilityCheckHorizon.md)
- [AvgInspDuration](docs/Model/AvgInspDuration.md)
- [BaseQuantity](docs/Model/BaseQuantity.md)
- [BaseQuantity1](docs/Model/BaseQuantity1.md)
- [CapacityUsage](docs/Model/CapacityUsage.md)
- [Cnversion](docs/Model/Cnversion.md)
- [CollectionOfProdPlntInternationalTradeType](docs/Model/CollectionOfProdPlntInternationalTradeType.md)
- [CollectionOfProdSalesDeliverySalesTaxType](docs/Model/CollectionOfProdSalesDeliverySalesTaxType.md)
- [CollectionOfProductChangeMasterType](docs/Model/CollectionOfProductChangeMasterType.md)
- [CollectionOfProductDescriptionType](docs/Model/CollectionOfProductDescriptionType.md)
- [CollectionOfProductEWMStorageTypeType](docs/Model/CollectionOfProductEWMStorageTypeType.md)
- [CollectionOfProductEWMWarehouseType](docs/Model/CollectionOfProductEWMWarehouseType.md)
- [CollectionOfProductPlantCostingType](docs/Model/CollectionOfProductPlantCostingType.md)
- [CollectionOfProductPlantForecastType](docs/Model/CollectionOfProductPlantForecastType.md)
- [CollectionOfProductPlantInspTypSettingType](docs/Model/CollectionOfProductPlantInspTypSettingType.md)
- [CollectionOfProductPlantMRPType](docs/Model/CollectionOfProductPlantMRPType.md)
- [CollectionOfProductPlantPlanningType](docs/Model/CollectionOfProductPlantPlanningType.md)
- [CollectionOfProductPlantProcurementType](docs/Model/CollectionOfProductPlantProcurementType.md)
- [CollectionOfProductPlantPurchaseTaxType](docs/Model/CollectionOfProductPlantPurchaseTaxType.md)
- [CollectionOfProductPlantQualityManagementType](docs/Model/CollectionOfProductPlantQualityManagementType.md)
- [CollectionOfProductPlantSalesType](docs/Model/CollectionOfProductPlantSalesType.md)
- [CollectionOfProductPlantStorageLocationType](docs/Model/CollectionOfProductPlantStorageLocationType.md)
- [CollectionOfProductPlantStorageType](docs/Model/CollectionOfProductPlantStorageType.md)
- [CollectionOfProductPlantSupplyPlanningType](docs/Model/CollectionOfProductPlantSupplyPlanningType.md)
- [CollectionOfProductPlantType](docs/Model/CollectionOfProductPlantType.md)
- [CollectionOfProductPlantWorkSchedulingType](docs/Model/CollectionOfProductPlantWorkSchedulingType.md)
- [CollectionOfProductProcurementType](docs/Model/CollectionOfProductProcurementType.md)
- [CollectionOfProductQualityManagementType](docs/Model/CollectionOfProductQualityManagementType.md)
- [CollectionOfProductSalesDeliveryType](docs/Model/CollectionOfProductSalesDeliveryType.md)
- [CollectionOfProductSalesType](docs/Model/CollectionOfProductSalesType.md)
- [CollectionOfProductStorageType](docs/Model/CollectionOfProductStorageType.md)
- [CollectionOfProductType](docs/Model/CollectionOfProductType.md)
- [CollectionOfProductUnitOfMeasureEANType](docs/Model/CollectionOfProductUnitOfMeasureEANType.md)
- [CollectionOfProductUnitOfMeasureType](docs/Model/CollectionOfProductUnitOfMeasureType.md)
- [CollectionOfProductValuationAccountingType](docs/Model/CollectionOfProductValuationAccountingType.md)
- [CollectionOfProductValuationCostingType](docs/Model/CollectionOfProductValuationCostingType.md)
- [CollectionOfProductValuationLedgerAccountType](docs/Model/CollectionOfProductValuationLedgerAccountType.md)
- [CollectionOfProductValuationLedgerPricesType](docs/Model/CollectionOfProductValuationLedgerPricesType.md)
- [CollectionOfProductValuationType](docs/Model/CollectionOfProductValuationType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductDescriptionTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantCostingTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantForecastTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantInspTypSettingTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantMRPTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPlanningTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantProcurementTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantPurchaseTaxTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSalesTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageLocationTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantSupplyPlanningTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductProcurementTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductStorageTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate.md)
- [ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate](docs/Model/ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate.md)
- [CommercialPrice1](docs/Model/CommercialPrice1.md)
- [CommercialPrice2](docs/Model/CommercialPrice2.md)
- [CommercialPrice3](docs/Model/CommercialPrice3.md)
- [ComponentScrap](docs/Model/ComponentScrap.md)
- [CostingLotSize](docs/Model/CostingLotSize.md)
- [Count](docs/Model/Count.md)
- [DeliveryUnit](docs/Model/DeliveryUnit.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorErrorDetailsInner](docs/Model/ErrorErrorDetailsInner.md)
- [ExcessVolumeTolerance](docs/Model/ExcessVolumeTolerance.md)
- [ExcessWeightTolerance](docs/Model/ExcessWeightTolerance.md)
- [FixedLotSize](docs/Model/FixedLotSize.md)
- [FuturePrice](docs/Model/FuturePrice.md)
- [GRProcessingTime](docs/Model/GRProcessingTime.md)
- [GRSlipsQuantity](docs/Model/GRSlipsQuantity.md)
- [GrossWeight](docs/Model/GrossWeight.md)
- [Height](docs/Model/Height.md)
- [InHouseProduction](docs/Model/InHouseProduction.md)
- [InspPercentage](docs/Model/InspPercentage.md)
- [InspectionInterval](docs/Model/InspectionInterval.md)
- [Interoperation](docs/Model/Interoperation.md)
- [LSIndependentCosts](docs/Model/LSIndependentCosts.md)
- [Length](docs/Model/Length.md)
- [MaxMinQty](docs/Model/MaxMinQty.md)
- [MaxPackHeight](docs/Model/MaxPackHeight.md)
- [MaxPackLength](docs/Model/MaxPackLength.md)
- [MaxPackWidth](docs/Model/MaxPackWidth.md)
- [MaxStoragePeriod](docs/Model/MaxStoragePeriod.md)
- [MaxTemperature](docs/Model/MaxTemperature.md)
- [MaximumCapacity](docs/Model/MaximumCapacity.md)
- [MaximumLevel](docs/Model/MaximumLevel.md)
- [MaximumLotSize](docs/Model/MaximumLotSize.md)
- [MaximumQuantity](docs/Model/MaximumQuantity.md)
- [MaximumStockLevel](docs/Model/MaximumStockLevel.md)
- [MinRemShelfLife](docs/Model/MinRemShelfLife.md)
- [MinReplenishQty](docs/Model/MinReplenishQty.md)
- [MinSafStock](docs/Model/MinSafStock.md)
- [MinShelfLife](docs/Model/MinShelfLife.md)
- [MinTemperature](docs/Model/MinTemperature.md)
- [MinimumDeliveryQty](docs/Model/MinimumDeliveryQty.md)
- [MinimumLotSize](docs/Model/MinimumLotSize.md)
- [MinimumOrderQty](docs/Model/MinimumOrderQty.md)
- [MinimumQuantity](docs/Model/MinimumQuantity.md)
- [MovingPrice](docs/Model/MovingPrice.md)
- [Multiplier](docs/Model/Multiplier.md)
- [NetWeight](docs/Model/NetWeight.md)
- [OvercapacityToler](docs/Model/OvercapacityToler.md)
- [OverdeliveryToler](docs/Model/OverdeliveryToler.md)
- [PerUnitPrice](docs/Model/PerUnitPrice.md)
- [PlannedDelivTime](docs/Model/PlannedDelivTime.md)
- [PlannedPrice1](docs/Model/PlannedPrice1.md)
- [PlannedPrice2](docs/Model/PlannedPrice2.md)
- [PlannedPrice3](docs/Model/PlannedPrice3.md)
- [PriceUnit](docs/Model/PriceUnit.md)
- [ProcessingTime](docs/Model/ProcessingTime.md)
- [ProcessingTime1](docs/Model/ProcessingTime1.md)
- [QuarantPer](docs/Model/QuarantPer.md)
- [ReorderPoint](docs/Model/ReorderPoint.md)
- [RoundingValue](docs/Model/RoundingValue.md)
- [SafetyStock](docs/Model/SafetyStock.md)
- [ServiceLevel](docs/Model/ServiceLevel.md)
- [SetupTime](docs/Model/SetupTime.md)
- [SetupTime1](docs/Model/SetupTime1.md)
- [StandardPrice](docs/Model/StandardPrice.md)
- [StoragePercentage](docs/Model/StoragePercentage.md)
- [TaktTime](docs/Model/TaktTime.md)
- [TaxPrice1](docs/Model/TaxPrice1.md)
- [TaxPrice2](docs/Model/TaxPrice2.md)
- [TaxPrice3](docs/Model/TaxPrice3.md)
- [ThrshldAddition](docs/Model/ThrshldAddition.md)
- [TotReplLeadTime](docs/Model/TotReplLeadTime.md)
- [TotalShelfLife](docs/Model/TotalShelfLife.md)
- [UnderdeliveryToler](docs/Model/UnderdeliveryToler.md)
- [UnitsQuantityAltUnitOfMeasure](docs/Model/UnitsQuantityAltUnitOfMeasure.md)
- [UnitsQuantityBaseUnitOfMeasure](docs/Model/UnitsQuantityBaseUnitOfMeasure.md)
- [Volume](docs/Model/Volume.md)
- [Width](docs/Model/Width.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2Auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://{host}:{port}`
- **Scopes**: 
    - **OV4:API_PRODUCT**: 

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

# BeLenka\SAP\ProductODV4\ProductSalesDeliverySalesTaxApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**prodSalesDeliverySalesTaxGet()**](ProductSalesDeliverySalesTaxApi.md#prodSalesDeliverySalesTaxGet) | **GET** /ProdSalesDeliverySalesTax | Get entities from ProdSalesDeliverySalesTax |
| [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet()**](ProductSalesDeliverySalesTaxApi.md#prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl} | Get entity from ProdSalesDeliverySalesTax by key |
| [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch()**](ProductSalesDeliverySalesTaxApi.md#prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch) | **PATCH** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl} | Update entity in ProdSalesDeliverySalesTax |
| [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet()**](ProductSalesDeliverySalesTaxApi.md#prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product |
| [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet()**](ProductSalesDeliverySalesTaxApi.md#prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProductSalesDelivery | Get related _ProductSalesDelivery |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet()**](ProductSalesDeliverySalesTaxApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Get entities from related _ProdSalesDeliverySalesTax |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost()**](ProductSalesDeliverySalesTaxApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost) | **POST** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Add new entity to related _ProdSalesDeliverySalesTax |


## `prodSalesDeliverySalesTaxGet()`

```php
prodSalesDeliverySalesTaxGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProdSalesDeliverySalesTaxType
```

Get entities from ProdSalesDeliverySalesTax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->prodSalesDeliverySalesTaxGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->prodSalesDeliverySalesTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProdSalesDeliverySalesTaxType**](../Model/CollectionOfProdSalesDeliverySalesTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet()`

```php
prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType
```

Get entity from ProdSalesDeliverySalesTax by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$country = 'country_example'; // string | Departure Country/Region (from which the goods are sent)
$product_sales_tax_category = 'product_sales_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **product_sales_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch()`

```php
prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_update)
```

Update entity in ProdSalesDeliverySalesTax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$country = 'country_example'; // string | Departure Country/Region (from which the goods are sent)
$product_sales_tax_category = 'product_sales_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate | New property values

try {
    $apiInstance->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **product_sales_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeUpdate.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet()`

```php
prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
```

Get related _Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$country = 'country_example'; // string | Departure Country/Region (from which the goods are sent)
$product_sales_tax_category = 'product_sales_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **product_sales_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet()`

```php
prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType
```

Get related _ProductSalesDelivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$country = 'country_example'; // string | Departure Country/Region (from which the goods are sent)
$product_sales_tax_category = 'product_sales_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet($product, $country, $product_sales_tax_category, $product_sales_org, $product_distribution_chnl, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **product_sales_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet()`

```php
productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet($product, $product_sales_org, $product_distribution_chnl, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProdSalesDeliverySalesTaxType
```

Get entities from related _ProdSalesDeliverySalesTax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet($product, $product_sales_org, $product_distribution_chnl, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProdSalesDeliverySalesTaxType**](../Model/CollectionOfProdSalesDeliverySalesTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost()`

```php
productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost($product, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType
```

Add new entity to related _ProdSalesDeliverySalesTax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\ProductODV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliverySalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate | New entity

try {
    $result = $apiInstance->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost($product, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliverySalesTaxApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_prod_sales_delivery_sales_tax_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

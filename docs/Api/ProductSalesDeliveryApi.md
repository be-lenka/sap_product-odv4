# BeLenka\SAP\ProductODV4\ProductSalesDeliveryApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet()**](ProductSalesDeliveryApi.md#prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet) | **GET** /ProdSalesDeliverySalesTax/{Product}/{Country}/{ProductSalesTaxCategory}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProductSalesDelivery | Get related _ProductSalesDelivery |
| [**productProductProductSalesDeliveryGet()**](ProductSalesDeliveryApi.md#productProductProductSalesDeliveryGet) | **GET** /Product/{Product}/_ProductSalesDelivery | Get entities from related _ProductSalesDelivery |
| [**productProductProductSalesDeliveryPost()**](ProductSalesDeliveryApi.md#productProductProductSalesDeliveryPost) | **POST** /Product/{Product}/_ProductSalesDelivery | Add new entity to related _ProductSalesDelivery |
| [**productSalesDeliveryGet()**](ProductSalesDeliveryApi.md#productSalesDeliveryGet) | **GET** /ProductSalesDelivery | Get entities from ProductSalesDelivery |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet()**](ProductSalesDeliveryApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl} | Get entity from ProductSalesDelivery by key |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch()**](ProductSalesDeliveryApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch) | **PATCH** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl} | Update entity in ProductSalesDelivery |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet()**](ProductSalesDeliveryApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Get entities from related _ProdSalesDeliverySalesTax |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost()**](ProductSalesDeliveryApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost) | **POST** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_ProdSalesDeliverySalesTax | Add new entity to related _ProdSalesDeliverySalesTax |
| [**productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet()**](ProductSalesDeliveryApi.md#productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet) | **GET** /ProductSalesDelivery/{Product}/{ProductSalesOrg}/{ProductDistributionChnl}/_Product | Get related _Product |


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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
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
    echo 'Exception when calling ProductSalesDeliveryApi->prodSalesDeliverySalesTaxProductCountryProductSalesTaxCategoryProductSalesOrgProductDistributionChnlProductSalesDeliveryGet: ', $e->getMessage(), PHP_EOL;
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

## `productProductProductSalesDeliveryGet()`

```php
productProductProductSalesDeliveryGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductSalesDeliveryType
```

Get entities from related _ProductSalesDelivery

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productProductProductSalesDeliveryGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productProductProductSalesDeliveryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductSalesDeliveryType**](../Model/CollectionOfProductSalesDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductProductSalesDeliveryPost()`

```php
productProductProductSalesDeliveryPost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType
```

Add new entity to related _ProductSalesDelivery

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate | New entity

try {
    $result = $apiInstance->productProductProductSalesDeliveryPost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productProductProductSalesDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSalesDeliveryGet()`

```php
productSalesDeliveryGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductSalesDeliveryType
```

Get entities from ProductSalesDelivery

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
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
    $result = $apiInstance->productSalesDeliveryGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductSalesDeliveryType**](../Model/CollectionOfProductSalesDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet()`

```php
productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet($product, $product_sales_org, $product_distribution_chnl, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryType
```

Get entity from ProductSalesDelivery by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet($product, $product_sales_org, $product_distribution_chnl, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
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

## `productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch()`

```php
productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch($product, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_update)
```

Update entity in ProductSalesDelivery

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate | New property values

try {
    $apiInstance->productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch($product, $product_sales_org, $product_distribution_chnl, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **product_sales_org** | **string**| Sales Organization | |
| **product_distribution_chnl** | **string**| Distribution Channel | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_sales_delivery_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeUpdate.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
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
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
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
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProdSalesDeliverySalesTaxPost: ', $e->getMessage(), PHP_EOL;
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

## `productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet()`

```php
productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet($product, $product_sales_org, $product_distribution_chnl, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductSalesDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$product_sales_org = 'product_sales_org_example'; // string | Sales Organization
$product_distribution_chnl = 'product_distribution_chnl_example'; // string | Distribution Channel
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet($product, $product_sales_org, $product_distribution_chnl, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesDeliveryApi->productSalesDeliveryProductProductSalesOrgProductDistributionChnlProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
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

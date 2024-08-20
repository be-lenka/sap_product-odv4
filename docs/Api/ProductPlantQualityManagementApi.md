# BeLenka\SAP\ProductODV4\ProductPlantQualityManagementApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productPlantProductPlantProductPlantQualityManagementGet()**](ProductPlantQualityManagementApi.md#productPlantProductPlantProductPlantQualityManagementGet) | **GET** /ProductPlant/{Product}/{Plant}/_ProductPlantQualityManagement | Get related _ProductPlantQualityManagement |
| [**productPlantQualityManagementGet()**](ProductPlantQualityManagementApi.md#productPlantQualityManagementGet) | **GET** /ProductPlantQualityManagement | Get entities from ProductPlantQualityManagement |
| [**productPlantQualityManagementProductPlantGet()**](ProductPlantQualityManagementApi.md#productPlantQualityManagementProductPlantGet) | **GET** /ProductPlantQualityManagement/{Product}/{Plant} | Get entity from ProductPlantQualityManagement by key |
| [**productPlantQualityManagementProductPlantPatch()**](ProductPlantQualityManagementApi.md#productPlantQualityManagementProductPlantPatch) | **PATCH** /ProductPlantQualityManagement/{Product}/{Plant} | Update entity in ProductPlantQualityManagement |
| [**productPlantQualityManagementProductPlantProductGet()**](ProductPlantQualityManagementApi.md#productPlantQualityManagementProductPlantProductGet) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_Product | Get related _Product |
| [**productPlantQualityManagementProductPlantProductPlantGet()**](ProductPlantQualityManagementApi.md#productPlantQualityManagementProductPlantProductPlantGet) | **GET** /ProductPlantQualityManagement/{Product}/{Plant}/_ProductPlant | Get related _ProductPlant |


## `productPlantProductPlantProductPlantQualityManagementGet()`

```php
productPlantProductPlantProductPlantQualityManagementGet($product, $plant, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType
```

Get related _ProductPlantQualityManagement

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$plant = 'plant_example'; // string | Plant
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productPlantProductPlantProductPlantQualityManagementGet($product, $plant, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantProductPlantProductPlantQualityManagementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **plant** | **string**| Plant | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPlantQualityManagementGet()`

```php
productPlantQualityManagementGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductPlantQualityManagementType
```

Get entities from ProductPlantQualityManagement

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
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
    $result = $apiInstance->productPlantQualityManagementGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantQualityManagementGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductPlantQualityManagementType**](../Model/CollectionOfProductPlantQualityManagementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPlantQualityManagementProductPlantGet()`

```php
productPlantQualityManagementProductPlantGet($product, $plant, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType
```

Get entity from ProductPlantQualityManagement by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$plant = 'plant_example'; // string | Plant
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productPlantQualityManagementProductPlantGet($product, $plant, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantQualityManagementProductPlantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **plant** | **string**| Plant | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPlantQualityManagementProductPlantPatch()`

```php
productPlantQualityManagementProductPlantPatch($product, $plant, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_plant_quality_management_type_update)
```

Update entity in ProductPlantQualityManagement

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$plant = 'plant_example'; // string | Plant
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_plant_quality_management_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate | New property values

try {
    $apiInstance->productPlantQualityManagementProductPlantPatch($product, $plant, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_plant_quality_management_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantQualityManagementProductPlantPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **plant** | **string**| Plant | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_plant_quality_management_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementTypeUpdate.md)| New property values | |

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

## `productPlantQualityManagementProductPlantProductGet()`

```php
productPlantQualityManagementProductPlantProductGet($product, $plant, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$plant = 'plant_example'; // string | Plant
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productPlantQualityManagementProductPlantProductGet($product, $plant, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantQualityManagementProductPlantProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **plant** | **string**| Plant | |
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

## `productPlantQualityManagementProductPlantProductPlantGet()`

```php
productPlantQualityManagementProductPlantProductPlantGet($product, $plant, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType
```

Get related _ProductPlant

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductPlantQualityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$plant = 'plant_example'; // string | Plant
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productPlantQualityManagementProductPlantProductPlantGet($product, $plant, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPlantQualityManagementApi->productPlantQualityManagementProductPlantProductPlantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **plant** | **string**| Plant | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

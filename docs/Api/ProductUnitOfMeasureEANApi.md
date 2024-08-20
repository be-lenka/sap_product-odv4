# BeLenka\SAP\ProductODV4\ProductUnitOfMeasureEANApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productUnitOfMeasureEANGet()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANGet) | **GET** /ProductUnitOfMeasureEAN | Get entities from ProductUnitOfMeasureEAN |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete) | **DELETE** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Delete entity from ProductUnitOfMeasureEAN |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Get entity from ProductUnitOfMeasureEAN by key |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch) | **PATCH** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber} | Update entity in ProductUnitOfMeasureEAN |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_Product | Get related _Product |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_ProductUnitOfMeasure | Get related _ProductUnitOfMeasure |
| [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Get entities from related _ProductUnitOfMeasureEAN |
| [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost()**](ProductUnitOfMeasureEANApi.md#productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost) | **POST** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Add new entity to related _ProductUnitOfMeasureEAN |


## `productUnitOfMeasureEANGet()`

```php
productUnitOfMeasureEANGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureEANType
```

Get entities from ProductUnitOfMeasureEAN

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
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
    $result = $apiInstance->productUnitOfMeasureEANGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureEANType**](../Model/CollectionOfProductUnitOfMeasureEANType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete()`

```php
productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete($product, $alternative_unit, $consecutive_number)
```

Delete entity from ProductUnitOfMeasureEAN

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Material Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$consecutive_number = 'consecutive_number_example'; // string | Consecutive Number

try {
    $apiInstance->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete($product, $alternative_unit, $consecutive_number);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Material Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **consecutive_number** | **string**| Consecutive Number | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet()`

```php
productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet($product, $alternative_unit, $consecutive_number, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType
```

Get entity from ProductUnitOfMeasureEAN by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Material Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$consecutive_number = 'consecutive_number_example'; // string | Consecutive Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet($product, $alternative_unit, $consecutive_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Material Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **consecutive_number** | **string**| Consecutive Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch()`

```php
productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch($product, $alternative_unit, $consecutive_number, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_update)
```

Update entity in ProductUnitOfMeasureEAN

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Material Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$consecutive_number = 'consecutive_number_example'; // string | Consecutive Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate | New property values

try {
    $apiInstance->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch($product, $alternative_unit, $consecutive_number, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Material Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **consecutive_number** | **string**| Consecutive Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeUpdate.md)| New property values | |

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

## `productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet()`

```php
productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet($product, $alternative_unit, $consecutive_number, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Material Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$consecutive_number = 'consecutive_number_example'; // string | Consecutive Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet($product, $alternative_unit, $consecutive_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Material Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **consecutive_number** | **string**| Consecutive Number | |
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

## `productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet()`

```php
productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet($product, $alternative_unit, $consecutive_number, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType
```

Get related _ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Material Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$consecutive_number = 'consecutive_number_example'; // string | Consecutive Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet($product, $alternative_unit, $consecutive_number, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Material Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **consecutive_number** | **string**| Consecutive Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet()`

```php
productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet($product, $alternative_unit, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureEANType
```

Get entities from related _ProductUnitOfMeasureEAN

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet($product, $alternative_unit, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureEANType**](../Model/CollectionOfProductUnitOfMeasureEANType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost()`

```php
productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost($product, $alternative_unit, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType
```

Add new entity to related _ProductUnitOfMeasureEAN

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureEANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate | New entity

try {
    $result = $apiInstance->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost($product, $alternative_unit, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureEANApi->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_ean_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

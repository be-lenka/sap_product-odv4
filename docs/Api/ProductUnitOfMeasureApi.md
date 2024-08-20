# BeLenka\SAP\ProductODV4\ProductUnitOfMeasureApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productProductProductUnitOfMeasureGet()**](ProductUnitOfMeasureApi.md#productProductProductUnitOfMeasureGet) | **GET** /Product/{Product}/_ProductUnitOfMeasure | Get entities from related _ProductUnitOfMeasure |
| [**productProductProductUnitOfMeasurePost()**](ProductUnitOfMeasureApi.md#productProductProductUnitOfMeasurePost) | **POST** /Product/{Product}/_ProductUnitOfMeasure | Add new entity to related _ProductUnitOfMeasure |
| [**productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet) | **GET** /ProductUnitOfMeasureEAN/{Product}/{AlternativeUnit}/{ConsecutiveNumber}/_ProductUnitOfMeasure | Get related _ProductUnitOfMeasure |
| [**productUnitOfMeasureGet()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureGet) | **GET** /ProductUnitOfMeasure | Get entities from ProductUnitOfMeasure |
| [**productUnitOfMeasureProductAlternativeUnitDelete()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitDelete) | **DELETE** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Delete entity from ProductUnitOfMeasure |
| [**productUnitOfMeasureProductAlternativeUnitGet()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitGet) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Get entity from ProductUnitOfMeasure by key |
| [**productUnitOfMeasureProductAlternativeUnitPatch()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitPatch) | **PATCH** /ProductUnitOfMeasure/{Product}/{AlternativeUnit} | Update entity in ProductUnitOfMeasure |
| [**productUnitOfMeasureProductAlternativeUnitProductGet()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitProductGet) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_Product | Get related _Product |
| [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet) | **GET** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Get entities from related _ProductUnitOfMeasureEAN |
| [**productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost()**](ProductUnitOfMeasureApi.md#productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost) | **POST** /ProductUnitOfMeasure/{Product}/{AlternativeUnit}/_ProductUnitOfMeasureEAN | Add new entity to related _ProductUnitOfMeasureEAN |


## `productProductProductUnitOfMeasureGet()`

```php
productProductProductUnitOfMeasureGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureType
```

Get entities from related _ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
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
    $result = $apiInstance->productProductProductUnitOfMeasureGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productProductProductUnitOfMeasureGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureType**](../Model/CollectionOfProductUnitOfMeasureType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductProductUnitOfMeasurePost()`

```php
productProductProductUnitOfMeasurePost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType
```

Add new entity to related _ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate | New entity

try {
    $result = $apiInstance->productProductProductUnitOfMeasurePost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productProductProductUnitOfMeasurePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
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
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureEANProductAlternativeUnitConsecutiveNumberProductUnitOfMeasureGet: ', $e->getMessage(), PHP_EOL;
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

## `productUnitOfMeasureGet()`

```php
productUnitOfMeasureGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureType
```

Get entities from ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
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
    $result = $apiInstance->productUnitOfMeasureGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductUnitOfMeasureType**](../Model/CollectionOfProductUnitOfMeasureType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitOfMeasureProductAlternativeUnitDelete()`

```php
productUnitOfMeasureProductAlternativeUnitDelete($product, $alternative_unit)
```

Delete entity from ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine

try {
    $apiInstance->productUnitOfMeasureProductAlternativeUnitDelete($product, $alternative_unit);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |

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

## `productUnitOfMeasureProductAlternativeUnitGet()`

```php
productUnitOfMeasureProductAlternativeUnitGet($product, $alternative_unit, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureType
```

Get entity from ProductUnitOfMeasure by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureProductAlternativeUnitGet($product, $alternative_unit, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
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

## `productUnitOfMeasureProductAlternativeUnitPatch()`

```php
productUnitOfMeasureProductAlternativeUnitPatch($product, $alternative_unit, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_update)
```

Update entity in ProductUnitOfMeasure

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate | New property values

try {
    $apiInstance->productUnitOfMeasureProductAlternativeUnitPatch($product, $alternative_unit, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_unit_of_measure_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeUpdate.md)| New property values | |

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

## `productUnitOfMeasureProductAlternativeUnitProductGet()`

```php
productUnitOfMeasureProductAlternativeUnitProductGet($product, $alternative_unit, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$alternative_unit = 'alternative_unit_example'; // string | Base Unit of Measure - No Conversion Routine
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productUnitOfMeasureProductAlternativeUnitProductGet($product, $alternative_unit, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **alternative_unit** | **string**| Base Unit of Measure - No Conversion Routine | |
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
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
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductUnitOfMeasureApi(
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
    echo 'Exception when calling ProductUnitOfMeasureApi->productUnitOfMeasureProductAlternativeUnitProductUnitOfMeasureEANPost: ', $e->getMessage(), PHP_EOL;
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

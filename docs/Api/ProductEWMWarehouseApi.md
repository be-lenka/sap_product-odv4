# BeLenka\SAP\ProductODV4\ProductEWMWarehouseApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet()**](ProductEWMWarehouseApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_ProductEWMWarehouse | Get related _ProductEWMWarehouse |
| [**productEWMWarehouseGet()**](ProductEWMWarehouseApi.md#productEWMWarehouseGet) | **GET** /ProductEWMWarehouse | Get entities from ProductEWMWarehouse |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet()**](ProductEWMWarehouseApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty} | Get entity from ProductEWMWarehouse by key |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch()**](ProductEWMWarehouseApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch) | **PATCH** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty} | Update entity in ProductEWMWarehouse |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet()**](ProductEWMWarehouseApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Get entities from related _ProductEWMStorageType |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost()**](ProductEWMWarehouseApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost) | **POST** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Add new entity to related _ProductEWMStorageType |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet()**](ProductEWMWarehouseApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_Product | Get related _Product |
| [**productProductProductEWMWarehouseGet()**](ProductEWMWarehouseApi.md#productProductProductEWMWarehouseGet) | **GET** /Product/{Product}/_ProductEWMWarehouse | Get entities from related _ProductEWMWarehouse |
| [**productProductProductEWMWarehousePost()**](ProductEWMWarehouseApi.md#productProductProductEWMWarehousePost) | **POST** /Product/{Product}/_ProductEWMWarehouse | Add new entity to related _ProductEWMWarehouse |


## `productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet()`

```php
productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType
```

Get related _ProductEWMWarehouse

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$ewm_storage_type = 'ewm_storage_type_example'; // string | Storage Type
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **ewm_storage_type** | **string**| Storage Type | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMWarehouseGet()`

```php
productEWMWarehouseGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMWarehouseType
```

Get entities from ProductEWMWarehouse

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
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
    $result = $apiInstance->productEWMWarehouseGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMWarehouseType**](../Model/CollectionOfProductEWMWarehouseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet()`

```php
productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet($product, $ewm_warehouse, $entitled_to_dispose_party, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType
```

Get entity from ProductEWMWarehouse by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet($product, $ewm_warehouse, $entitled_to_dispose_party, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch()`

```php
productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch($product, $ewm_warehouse, $entitled_to_dispose_party, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_update)
```

Update entity in ProductEWMWarehouse

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate | New property values

try {
    $apiInstance->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch($product, $ewm_warehouse, $entitled_to_dispose_party, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeUpdate.md)| New property values | |

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

## `productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet()`

```php
productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet($product, $ewm_warehouse, $entitled_to_dispose_party, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMStorageTypeType
```

Get entities from related _ProductEWMStorageType

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet($product, $ewm_warehouse, $entitled_to_dispose_party, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMStorageTypeType**](../Model/CollectionOfProductEWMStorageTypeType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost()`

```php
productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost($product, $ewm_warehouse, $entitled_to_dispose_party, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType
```

Add new entity to related _ProductEWMStorageType

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate | New entity

try {
    $result = $apiInstance->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost($product, $ewm_warehouse, $entitled_to_dispose_party, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet()`

```php
productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet($product, $ewm_warehouse, $entitled_to_dispose_party, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet($product, $ewm_warehouse, $entitled_to_dispose_party, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
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

## `productProductProductEWMWarehouseGet()`

```php
productProductProductEWMWarehouseGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMWarehouseType
```

Get entities from related _ProductEWMWarehouse

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
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
    $result = $apiInstance->productProductProductEWMWarehouseGet($product, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productProductProductEWMWarehouseGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMWarehouseType**](../Model/CollectionOfProductEWMWarehouseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductProductEWMWarehousePost()`

```php
productProductProductEWMWarehousePost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType
```

Add new entity to related _ProductEWMWarehouse

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMWarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate | New entity

try {
    $result = $apiInstance->productProductProductEWMWarehousePost($product, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMWarehouseApi->productProductProductEWMWarehousePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_warehouse_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMWarehouseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

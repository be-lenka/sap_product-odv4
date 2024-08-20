# BeLenka\SAP\ProductODV4\ProductEWMStorageTypeApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productEWMStorageTypeGet()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeGet) | **GET** /ProductEWMStorageType | Get entities from ProductEWMStorageType |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete) | **DELETE** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Delete entity from ProductEWMStorageType |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Get entity from ProductEWMStorageType by key |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch) | **PATCH** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType} | Update entity in ProductEWMStorageType |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_ProductEWMWarehouse | Get related _ProductEWMWarehouse |
| [**productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet()**](ProductEWMStorageTypeApi.md#productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet) | **GET** /ProductEWMStorageType/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/{EWMStorageType}/_Product | Get related _Product |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet()**](ProductEWMStorageTypeApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet) | **GET** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Get entities from related _ProductEWMStorageType |
| [**productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost()**](ProductEWMStorageTypeApi.md#productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost) | **POST** /ProductEWMWarehouse/{Product}/{EWMWarehouse}/{EntitledToDisposeParty}/_ProductEWMStorageType | Add new entity to related _ProductEWMStorageType |


## `productEWMStorageTypeGet()`

```php
productEWMStorageTypeGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMStorageTypeType
```

Get entities from ProductEWMStorageType

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    $result = $apiInstance->productEWMStorageTypeGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductEWMStorageTypeType**](../Model/CollectionOfProductEWMStorageTypeType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete()`

```php
productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type)
```

Delete entity from ProductEWMStorageType

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$ewm_storage_type = 'ewm_storage_type_example'; // string | Storage Type

try {
    $apiInstance->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **ewm_storage_type** | **string**| Storage Type | |

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

## `productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet()`

```php
productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType
```

Get entity from ProductEWMStorageType by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    $result = $apiInstance->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch()`

```php
productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_update)
```

Update entity in ProductEWMStorageType

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$ewm_warehouse = 'ewm_warehouse_example'; // string | Warehouse Number/Warehouse Complex
$entitled_to_dispose_party = 'entitled_to_dispose_party_example'; // string | Business Partner Number
$ewm_storage_type = 'ewm_storage_type_example'; // string | Storage Type
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate | New property values

try {
    $apiInstance->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **ewm_warehouse** | **string**| Warehouse Number/Warehouse Complex | |
| **entitled_to_dispose_party** | **string**| Business Partner Number | |
| **ewm_storage_type** | **string**| Storage Type | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_ewm_storage_type_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductEWMStorageTypeTypeUpdate.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductEWMWarehouseGet: ', $e->getMessage(), PHP_EOL;
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

## `productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet()`

```php
productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    $result = $apiInstance->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet($product, $ewm_warehouse, $entitled_to_dispose_party, $ewm_storage_type, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMStorageTypeProductEWMWarehouseEntitledToDisposePartyEWMStorageTypeProductGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypeGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductEWMStorageTypeApi(
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
    echo 'Exception when calling ProductEWMStorageTypeApi->productEWMWarehouseProductEWMWarehouseEntitledToDisposePartyProductEWMStorageTypePost: ', $e->getMessage(), PHP_EOL;
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

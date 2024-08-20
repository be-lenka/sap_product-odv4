# BeLenka\SAP\ProductODV4\ProductValuationLedgerAccountApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productValuationLedgerAccountGet()**](ProductValuationLedgerAccountApi.md#productValuationLedgerAccountGet) | **GET** /ProductValuationLedgerAccount | Get entities from ProductValuationLedgerAccount |
| [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet()**](ProductValuationLedgerAccountApi.md#productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Get entity from ProductValuationLedgerAccount by key |
| [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch()**](ProductValuationLedgerAccountApi.md#productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch) | **PATCH** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Update entity in ProductValuationLedgerAccount |
| [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet()**](ProductValuationLedgerAccountApi.md#productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product |
| [**productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet()**](ProductValuationLedgerAccountApi.md#productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet) | **GET** /ProductValuationLedgerAccount/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation |
| [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet()**](ProductValuationLedgerAccountApi.md#productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Get entities from related _ProductValuationLedgerAccount |
| [**productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost()**](ProductValuationLedgerAccountApi.md#productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerAccount | Add new entity to related _ProductValuationLedgerAccount |


## `productValuationLedgerAccountGet()`

```php
productValuationLedgerAccountGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerAccountType
```

Get entities from ProductValuationLedgerAccount

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
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
    $result = $apiInstance->productValuationLedgerAccountGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationLedgerAccountGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerAccountType**](../Model/CollectionOfProductValuationLedgerAccountType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet()`

```php
productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType
```

Get entity from ProductValuationLedgerAccount by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$currency_role = 'currency_role_example'; // string | External Currency Type and Valuation View
$ledger = 'ledger_example'; // string | Ledger in General Ledger Accounting
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **currency_role** | **string**| External Currency Type and Valuation View | |
| **ledger** | **string**| Ledger in General Ledger Accounting | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch()`

```php
productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch($product, $valuation_area, $valuation_type, $currency_role, $ledger, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_update)
```

Update entity in ProductValuationLedgerAccount

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$currency_role = 'currency_role_example'; // string | External Currency Type and Valuation View
$ledger = 'ledger_example'; // string | Ledger in General Ledger Accounting
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate | New property values

try {
    $apiInstance->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch($product, $valuation_area, $valuation_type, $currency_role, $ledger, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **currency_role** | **string**| External Currency Type and Valuation View | |
| **ledger** | **string**| Ledger in General Ledger Accounting | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeUpdate.md)| New property values | |

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

## `productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet()`

```php
productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$currency_role = 'currency_role_example'; // string | External Currency Type and Valuation View
$ledger = 'ledger_example'; // string | Ledger in General Ledger Accounting
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **currency_role** | **string**| External Currency Type and Valuation View | |
| **ledger** | **string**| Ledger in General Ledger Accounting | |
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

## `productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet()`

```php
productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType
```

Get related _ProductValuation

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$currency_role = 'currency_role_example'; // string | External Currency Type and Valuation View
$ledger = 'ledger_example'; // string | Ledger in General Ledger Accounting
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationLedgerAccountProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **currency_role** | **string**| External Currency Type and Valuation View | |
| **ledger** | **string**| Ledger in General Ledger Accounting | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet()`

```php
productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet($product, $valuation_area, $valuation_type, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerAccountType
```

Get entities from related _ProductValuationLedgerAccount

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$top = 50; // int | Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter)
$count = True; // bool | Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand)

try {
    $result = $apiInstance->productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet($product, $valuation_area, $valuation_type, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **top** | **int**| Show only the first n items, see [Paging - Top](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionskip) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter) | [optional] |
| **count** | **bool**| Include count of items, see [Count](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptioncount) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand) | [optional] |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerAccountType**](../Model/CollectionOfProductValuationLedgerAccountType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost()`

```php
productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost($product, $valuation_area, $valuation_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType
```

Add new entity to related _ProductValuationLedgerAccount

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate | New entity

try {
    $result = $apiInstance->productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost($product, $valuation_area, $valuation_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerAccountApi->productValuationProductValuationAreaValuationTypeProductValuationLedgerAccountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_account_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerAccountType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

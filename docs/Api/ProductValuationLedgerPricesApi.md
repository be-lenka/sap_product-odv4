# BeLenka\SAP\ProductODV4\ProductValuationLedgerPricesApi

All URIs are relative to https://:/sap/opu/odata4/sap/api_product/srvd_a2x/sap/product/0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productValuationLedgerPricesGet()**](ProductValuationLedgerPricesApi.md#productValuationLedgerPricesGet) | **GET** /ProductValuationLedgerPrices | Get entities from ProductValuationLedgerPrices |
| [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet()**](ProductValuationLedgerPricesApi.md#productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Get entity from ProductValuationLedgerPrices by key |
| [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch()**](ProductValuationLedgerPricesApi.md#productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch) | **PATCH** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger} | Update entity in ProductValuationLedgerPrices |
| [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet()**](ProductValuationLedgerPricesApi.md#productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_Product | Get related _Product |
| [**productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet()**](ProductValuationLedgerPricesApi.md#productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet) | **GET** /ProductValuationLedgerPrices/{Product}/{ValuationArea}/{ValuationType}/{CurrencyRole}/{Ledger}/_ProductValuation | Get related _ProductValuation |
| [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet()**](ProductValuationLedgerPricesApi.md#productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet) | **GET** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Get entities from related _ProductValuationLedgerPrices |
| [**productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost()**](ProductValuationLedgerPricesApi.md#productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost) | **POST** /ProductValuation/{Product}/{ValuationArea}/{ValuationType}/_ProductValuationLedgerPrices | Add new entity to related _ProductValuationLedgerPrices |


## `productValuationLedgerPricesGet()`

```php
productValuationLedgerPricesGet($top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerPricesType
```

Get entities from ProductValuationLedgerPrices

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
    $result = $apiInstance->productValuationLedgerPricesGet($top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationLedgerPricesGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerPricesType**](../Model/CollectionOfProductValuationLedgerPricesType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet()`

```php
productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType
```

Get entity from ProductValuationLedgerPrices by key

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
    $result = $apiInstance->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch()`

```php
productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch($product, $valuation_area, $valuation_type, $currency_role, $ledger, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_update)
```

Update entity in ProductValuationLedgerPrices

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_update = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate | New property values

try {
    $apiInstance->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch($product, $valuation_area, $valuation_type, $currency_role, $ledger, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_update);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerPatch: ', $e->getMessage(), PHP_EOL;
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
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_update** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeUpdate.md)| New property values | |

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

## `productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet()`

```php
productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
    $result = $apiInstance->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductGet: ', $e->getMessage(), PHP_EOL;
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

## `productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet()`

```php
productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationType
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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
    $result = $apiInstance->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet($product, $valuation_area, $valuation_type, $currency_role, $ledger, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationLedgerPricesProductValuationAreaValuationTypeCurrencyRoleLedgerProductValuationGet: ', $e->getMessage(), PHP_EOL;
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

## `productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet()`

```php
productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet($product, $valuation_area, $valuation_type, $top, $skip, $filter, $count, $orderby, $select, $expand): \BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerPricesType
```

Get entities from related _ProductValuationLedgerPrices

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
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
    $result = $apiInstance->productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet($product, $valuation_area, $valuation_type, $top, $skip, $filter, $count, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\ProductODV4\Model\CollectionOfProductValuationLedgerPricesType**](../Model/CollectionOfProductValuationLedgerPricesType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost()`

```php
productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost($product, $valuation_area, $valuation_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_create): \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType
```

Add new entity to related _ProductValuationLedgerPrices

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


$apiInstance = new BeLenka\SAP\ProductODV4\Api\ProductValuationLedgerPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product Number
$valuation_area = 'valuation_area_example'; // string | Valuation Area
$valuation_type = 'valuation_type_example'; // string | Valuation Type
$com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_create = new \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate(); // \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate | New entity

try {
    $result = $apiInstance->productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost($product, $valuation_area, $valuation_type, $com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductValuationLedgerPricesApi->productValuationProductValuationAreaValuationTypeProductValuationLedgerPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product Number | |
| **valuation_area** | **string**| Valuation Area | |
| **valuation_type** | **string**| Valuation Type | |
| **com_sap_gateway_srvd_a2x_api_product2_v0001_product_valuation_ledger_prices_type_create** | [**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType**](../Model/ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

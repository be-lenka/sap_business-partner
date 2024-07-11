# BeLenka\SAP\BusinessPartner\CustomerTaxGroupingApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCustomerToCustomerTaxGroupingGet()**](CustomerTaxGroupingApi.md#aCustomerCustomerToCustomerTaxGroupingGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustomerTaxGrouping | Retrieves customer tax grouping data. |
| [**aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete()**](CustomerTaxGroupingApi.md#aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete) | **DELETE** /A_CustomerTaxGrouping(Customer&#x3D;&#39;{Customer}&#39;,CustomerTaxGroupingCode&#x3D;&#39;{CustomerTaxGroupingCode}&#39;) | Deletes customer tax grouping records by using the key fields. |
| [**aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet()**](CustomerTaxGroupingApi.md#aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet) | **GET** /A_CustomerTaxGrouping(Customer&#x3D;&#39;{Customer}&#39;,CustomerTaxGroupingCode&#x3D;&#39;{CustomerTaxGroupingCode}&#39;) | Retrieves customer tax grouping records using the key fields. |
| [**aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch()**](CustomerTaxGroupingApi.md#aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch) | **PATCH** /A_CustomerTaxGrouping(Customer&#x3D;&#39;{Customer}&#39;,CustomerTaxGroupingCode&#x3D;&#39;{CustomerTaxGroupingCode}&#39;) | Updates customer tax grouping records using the key fields. |
| [**aCustomerTaxGroupingGet()**](CustomerTaxGroupingApi.md#aCustomerTaxGroupingGet) | **GET** /A_CustomerTaxGrouping | Retrieves customer tax grouping data. |


## `aCustomerCustomerToCustomerTaxGroupingGet()`

```php
aCustomerCustomerToCustomerTaxGroupingGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper39
```

Retrieves customer tax grouping data.

Retrieves all the customer tax grouping data attached to a customer in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTaxGroupingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerCustomerToCustomerTaxGroupingGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTaxGroupingApi->aCustomerCustomerToCustomerTaxGroupingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper39**](../Model/Wrapper39.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete()`

```php
aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete($customer, $customer_tax_grouping_code)
```

Deletes customer tax grouping records by using the key fields.

Deletes customer tax grouping records by Customer and CustomerTaxGroupingCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTaxGroupingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$customer_tax_grouping_code = 'customer_tax_grouping_code_example'; // string | Category Indicator for Tax Codes

try {
    $apiInstance->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete($customer, $customer_tax_grouping_code);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTaxGroupingApi->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **customer_tax_grouping_code** | **string**| Category Indicator for Tax Codes | |

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

## `aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet()`

```php
aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet($customer, $customer_tax_grouping_code, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerTaxGroupingType
```

Retrieves customer tax grouping records using the key fields.

Retrieves customer tax grouping records by using Customer and CustomerTaxGroupingCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTaxGroupingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$customer_tax_grouping_code = 'customer_tax_grouping_code_example'; // string | Category Indicator for Tax Codes
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet($customer, $customer_tax_grouping_code, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTaxGroupingApi->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **customer_tax_grouping_code** | **string**| Category Indicator for Tax Codes | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerTaxGroupingType**](../Model/ACustomerTaxGroupingType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch()`

```php
aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch($customer, $customer_tax_grouping_code, $modified_a_customer_tax_grouping_type)
```

Updates customer tax grouping records using the key fields.

Updates customer tax grouping records by Customer and CustomerTaxGroupingCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTaxGroupingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$customer_tax_grouping_code = 'customer_tax_grouping_code_example'; // string | Category Indicator for Tax Codes
$modified_a_customer_tax_grouping_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTaxGroupingType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTaxGroupingType | New property values

try {
    $apiInstance->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch($customer, $customer_tax_grouping_code, $modified_a_customer_tax_grouping_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTaxGroupingApi->aCustomerTaxGroupingCustomerCustomerCustomerTaxGroupingCodeCustomerTaxGroupingCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **customer_tax_grouping_code** | **string**| Category Indicator for Tax Codes | |
| **modified_a_customer_tax_grouping_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTaxGroupingType**](../Model/ModifiedACustomerTaxGroupingType.md)| New property values | |

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

## `aCustomerTaxGroupingGet()`

```php
aCustomerTaxGroupingGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper39
```

Retrieves customer tax grouping data.

Retrieves all the customer tax grouping data attached to a customer in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTaxGroupingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerTaxGroupingGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTaxGroupingApi->aCustomerTaxGroupingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper39**](../Model/Wrapper39.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

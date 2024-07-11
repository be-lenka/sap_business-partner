# BeLenka\SAP\BusinessPartner\CustomerUnloadingPointApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCustomerToCustomerUnloadingPointGet()**](CustomerUnloadingPointApi.md#aCustomerCustomerToCustomerUnloadingPointGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustomerUnloadingPoint | Retrieves customer unloading point data. |
| [**aCustomerCustomerToCustomerUnloadingPointPost()**](CustomerUnloadingPointApi.md#aCustomerCustomerToCustomerUnloadingPointPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustomerUnloadingPoint | Creates new customer unloading point record. |
| [**aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete()**](CustomerUnloadingPointApi.md#aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete) | **DELETE** /A_CustomerUnloadingPoint(Customer&#x3D;&#39;{Customer}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Deletes customer unloading point record by key fields. |
| [**aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet()**](CustomerUnloadingPointApi.md#aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet) | **GET** /A_CustomerUnloadingPoint(Customer&#x3D;&#39;{Customer}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Retrieves customer unloading point records by using key fields. |
| [**aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch()**](CustomerUnloadingPointApi.md#aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch) | **PATCH** /A_CustomerUnloadingPoint(Customer&#x3D;&#39;{Customer}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Updates customer unloading point record. |
| [**aCustomerUnloadingPointGet()**](CustomerUnloadingPointApi.md#aCustomerUnloadingPointGet) | **GET** /A_CustomerUnloadingPoint | Retrieves customer unloading point data. |
| [**aCustomerUnloadingPointPost()**](CustomerUnloadingPointApi.md#aCustomerUnloadingPointPost) | **POST** /A_CustomerUnloadingPoint | Creates new customer unloading point record. |


## `aCustomerCustomerToCustomerUnloadingPointGet()`

```php
aCustomerCustomerToCustomerUnloadingPointGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper41
```

Retrieves customer unloading point data.

Retrieves all unloading point data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
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
    $result = $apiInstance->aCustomerCustomerToCustomerUnloadingPointGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerCustomerToCustomerUnloadingPointGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper41**](../Model/Wrapper41.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustomerUnloadingPointPost()`

```php
aCustomerCustomerToCustomerUnloadingPointPost($customer, $apibusinesspartnera_customer_unloading_point_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType
```

Creates new customer unloading point record.

Creates customer unloading point record linked to customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_customer_unloading_point_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustomerUnloadingPointPost($customer, $apibusinesspartnera_customer_unloading_point_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerCustomerToCustomerUnloadingPointPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_customer_unloading_point_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate**](../Model/APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType**](../Model/ACustomerUnloadingPointType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete()`

```php
aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete($customer, $unloading_point_name)
```

Deletes customer unloading point record by key fields.

Deletes unloading point data linked to customer by key fields such as Customer,UnloadingPointName.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point

try {
    $apiInstance->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete($customer, $unloading_point_name);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **unloading_point_name** | **string**| Unloading Point | |

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

## `aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet()`

```php
aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet($customer, $unloading_point_name, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType
```

Retrieves customer unloading point records by using key fields.

Retrieves customer withholding tax records by customer and unloading point name.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet($customer, $unloading_point_name, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **unloading_point_name** | **string**| Unloading Point | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType**](../Model/ACustomerUnloadingPointType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch()`

```php
aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch($customer, $unloading_point_name, $modified_a_customer_unloading_point_type)
```

Updates customer unloading point record.

Updates customer unloading point record linked to customer by key fields such as Customer,UnloadingPointName.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point
$modified_a_customer_unloading_point_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerUnloadingPointType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerUnloadingPointType | New property values

try {
    $apiInstance->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch($customer, $unloading_point_name, $modified_a_customer_unloading_point_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerUnloadingPointCustomerCustomerUnloadingPointNameUnloadingPointNamePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **unloading_point_name** | **string**| Unloading Point | |
| **modified_a_customer_unloading_point_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerUnloadingPointType**](../Model/ModifiedACustomerUnloadingPointType.md)| New property values | |

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

## `aCustomerUnloadingPointGet()`

```php
aCustomerUnloadingPointGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper41
```

Retrieves customer unloading point data.

Retrieves all unloading point data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
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
    $result = $apiInstance->aCustomerUnloadingPointGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerUnloadingPointGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper41**](../Model/Wrapper41.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerUnloadingPointPost()`

```php
aCustomerUnloadingPointPost($apibusinesspartnera_customer_unloading_point_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType
```

Creates new customer unloading point record.

Creates customer unloading point record linked to customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_unloading_point_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerUnloadingPointPost($apibusinesspartnera_customer_unloading_point_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointApi->aCustomerUnloadingPointPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_unloading_point_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate**](../Model/APIBUSINESSPARTNERACustomerUnloadingPointTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerUnloadingPointType**](../Model/ACustomerUnloadingPointType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

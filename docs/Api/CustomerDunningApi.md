# BeLenka\SAP\BusinessPartner\CustomerDunningApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet()**](CustomerDunningApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CustomerDunning | Retrieves dunning records attached to customer company. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost()**](CustomerDunningApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CustomerDunning | Creates new dunning record attached to customer company. |
| [**aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete()**](CustomerDunningApi.md#aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete) | **DELETE** /A_CustomerDunning(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Updates customer company code dunning record by using key fields. |
| [**aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet()**](CustomerDunningApi.md#aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet) | **GET** /A_CustomerDunning(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Retrieves all the dunning records by using key fields. |
| [**aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch()**](CustomerDunningApi.md#aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch) | **PATCH** /A_CustomerDunning(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Updates customer company code dunning record. |
| [**aCustomerDunningGet()**](CustomerDunningApi.md#aCustomerDunningGet) | **GET** /A_CustomerDunning | Retrieves dunning records attached to customer company. |
| [**aCustomerDunningPost()**](CustomerDunningApi.md#aCustomerDunningPost) | **POST** /A_CustomerDunning | Creates new dunning record attached to customer company. |


## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper44
```

Retrieves dunning records attached to customer company.

Retrieves all the dunning records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper44**](../Model/Wrapper44.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost($customer, $company_code, $apibusinesspartnera_customer_dunning_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType
```

Creates new dunning record attached to customer company.

Assigns a new dunning record to a customer company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_customer_dunning_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost($customer, $company_code, $apibusinesspartnera_customer_dunning_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_customer_dunning_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate**](../Model/APIBUSINESSPARTNERACustomerDunningTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType**](../Model/ACustomerDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete()`

```php
aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete($customer, $company_code, $dunning_area)
```

Updates customer company code dunning record by using key fields.

Deletes customer company code dunning record identified by key fields such as Customer, CompanyCode, and Dunning Area.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area

try {
    $apiInstance->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete($customer, $company_code, $dunning_area);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |

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

## `aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet()`

```php
aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet($customer, $company_code, $dunning_area, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType
```

Retrieves all the dunning records by using key fields.

Retrieves all the dunning records by customer, company code, and dunning area.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet($customer, $company_code, $dunning_area, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType**](../Model/ACustomerDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch()`

```php
aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch($customer, $company_code, $dunning_area, $modified_a_customer_dunning_type)
```

Updates customer company code dunning record.

Updates customer company code dunning record identified by key fields such as Customer, CompanyCode, and Dunning Area.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area
$modified_a_customer_dunning_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerDunningType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerDunningType | New property values

try {
    $apiInstance->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch($customer, $company_code, $dunning_area, $modified_a_customer_dunning_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerDunningCustomerCustomerCompanyCodeCompanyCodeDunningAreaDunningAreaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |
| **modified_a_customer_dunning_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerDunningType**](../Model/ModifiedACustomerDunningType.md)| New property values | |

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

## `aCustomerDunningGet()`

```php
aCustomerDunningGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper44
```

Retrieves dunning records attached to customer company.

Retrieves all the dunning records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
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
    $result = $apiInstance->aCustomerDunningGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerDunningGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper44**](../Model/Wrapper44.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerDunningPost()`

```php
aCustomerDunningPost($apibusinesspartnera_customer_dunning_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType
```

Creates new dunning record attached to customer company.

Assigns a new dunning record to a customer company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_dunning_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerDunningPost($apibusinesspartnera_customer_dunning_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDunningApi->aCustomerDunningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_dunning_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerDunningTypeCreate**](../Model/APIBUSINESSPARTNERACustomerDunningTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerDunningType**](../Model/ACustomerDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# BeLenka\SAP\BusinessPartner\CustomerCompanyApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;) | Retrieves customer company data by using key fields. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch) | **PATCH** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;) | Updates company code data linked to the customer. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Retrieves customer company text records attached to company data. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Creates customer company text data. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CustomerDunning | Retrieves dunning records attached to customer company. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CustomerDunning | Creates new dunning record attached to customer company. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_WithHoldingTax | Retrieves customer withholding tax records attached to customer company. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost()**](CustomerCompanyApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_WithHoldingTax | Creates new customer withholding tax record. |
| [**aCustomerCompanyGet()**](CustomerCompanyApi.md#aCustomerCompanyGet) | **GET** /A_CustomerCompany | Retrieves customer company data. |
| [**aCustomerCompanyPost()**](CustomerCompanyApi.md#aCustomerCompanyPost) | **POST** /A_CustomerCompany | Creates new company code data linked to the customer. |
| [**aCustomerCustomerToCustomerCompanyGet()**](CustomerCompanyApi.md#aCustomerCustomerToCustomerCompanyGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustomerCompany | Retrieves customer company data. |
| [**aCustomerCustomerToCustomerCompanyPost()**](CustomerCompanyApi.md#aCustomerCustomerToCustomerCompanyPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustomerCompany | Creates new company code data linked to the customer. |


## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet($customer, $company_code, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType
```

Retrieves customer company data by using key fields.

Retrieves customer company data by key fields such as customer and company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet($customer, $company_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType**](../Model/ACustomerCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch($customer, $company_code, $modified_a_customer_company_type)
```

Updates company code data linked to the customer.

Updates company code data linked to the customer by customer and company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$modified_a_customer_company_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyType | New property values

try {
    $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch($customer, $company_code, $modified_a_customer_company_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **modified_a_customer_company_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyType**](../Model/ModifiedACustomerCompanyType.md)| New property values | |

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

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper43
```

Retrieves customer company text records attached to company data.

Retrieves all the customer company text records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper43**](../Model/Wrapper43.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost($customer, $company_code, $apibusinesspartnera_customer_company_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyTextType
```

Creates customer company text data.

Creates text data linked to customer company.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_customer_company_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTextTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost($customer, $company_code, $apibusinesspartnera_customer_company_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_customer_company_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTextTypeCreate**](../Model/APIBUSINESSPARTNERACustomerCompanyTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyTextType**](../Model/ACustomerCompanyTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCustomerDunningPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper45
```

Retrieves customer withholding tax records attached to customer company.

Retrieves all the withholding tax records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper45**](../Model/Wrapper45.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost($customer, $company_code, $apibusinesspartnera_customer_with_holding_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType
```

Creates new customer withholding tax record.

Creates customer withholding tax record linked to customer company.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_customer_with_holding_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost($customer, $company_code, $apibusinesspartnera_customer_with_holding_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_customer_with_holding_tax_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate**](../Model/APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType**](../Model/ACustomerWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyGet()`

```php
aCustomerCompanyGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper37
```

Retrieves customer company data.

Retrieves customer company data fields of all the available records in the system linked to customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerCompanyGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyGet: ', $e->getMessage(), PHP_EOL;
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
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper37**](../Model/Wrapper37.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyPost()`

```php
aCustomerCompanyPost($apibusinesspartnera_customer_company_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType
```

Creates new company code data linked to the customer.

Assigns company code data to a customer. A customer can be assigned to multiple company records.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_company_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyPost($apibusinesspartnera_customer_company_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_company_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate**](../Model/APIBUSINESSPARTNERACustomerCompanyTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType**](../Model/ACustomerCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustomerCompanyGet()`

```php
aCustomerCustomerToCustomerCompanyGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper37
```

Retrieves customer company data.

Retrieves customer company data fields of all the available records in the system linked to customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
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
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerCustomerToCustomerCompanyGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCustomerToCustomerCompanyGet: ', $e->getMessage(), PHP_EOL;
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
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper37**](../Model/Wrapper37.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustomerCompanyPost()`

```php
aCustomerCustomerToCustomerCompanyPost($customer, $apibusinesspartnera_customer_company_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType
```

Creates new company code data linked to the customer.

Assigns company code data to a customer. A customer can be assigned to multiple company records.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_customer_company_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustomerCompanyPost($customer, $apibusinesspartnera_customer_company_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyApi->aCustomerCustomerToCustomerCompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_customer_company_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTypeCreate**](../Model/APIBUSINESSPARTNERACustomerCompanyTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyType**](../Model/ACustomerCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

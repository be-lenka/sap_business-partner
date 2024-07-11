# BeLenka\SAP\BusinessPartner\CustomerCompanyTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet()**](CustomerCompanyTextApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Retrieves customer company text records attached to company data. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost()**](CustomerCompanyTextApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Creates customer company text data. |
| [**aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete()**](CustomerCompanyTextApi.md#aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_CustomerCompanyText(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes customer company text data. |
| [**aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet()**](CustomerCompanyTextApi.md#aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_CustomerCompanyText(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Retrieves customer company text data by using key fields. |
| [**aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch()**](CustomerCompanyTextApi.md#aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_CustomerCompanyText(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates customer company text data. |
| [**aCustomerCompanyTextGet()**](CustomerCompanyTextApi.md#aCustomerCompanyTextGet) | **GET** /A_CustomerCompanyText | Retrieves customer company text records attached to company data. |
| [**aCustomerCompanyTextPost()**](CustomerCompanyTextApi.md#aCustomerCompanyTextPost) | **POST** /A_CustomerCompanyText | Creates customer company text data. |


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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
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
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
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
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToCompanyTextPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete($customer, $company_code, $language, $long_text_id)
```

Deletes customer company text data.

Deletes text data linked to customer company by using the fields Customer, CompanyCode, Language and LongTextID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete($customer, $company_code, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |

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

## `aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet()`

```php
aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet($customer, $company_code, $language, $long_text_id, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyTextType
```

Retrieves customer company text data by using key fields.

Retrieves customer company text data by using the fields Customer, CompanyCode, Language and LongTextID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet($customer, $company_code, $language, $long_text_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyTextType**](../Model/ACustomerCompanyTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch($customer, $company_code, $language, $long_text_id, $modified_a_customer_company_text_type)
```

Updates customer company text data.

Updates text data linked to customer company by using fields Customer, CompanyCode, Language and LongTextID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_customer_company_text_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyTextType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyTextType | New property values

try {
    $apiInstance->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch($customer, $company_code, $language, $long_text_id, $modified_a_customer_company_text_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyTextCustomerCustomerCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_customer_company_text_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerCompanyTextType**](../Model/ModifiedACustomerCompanyTextType.md)| New property values | |

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

## `aCustomerCompanyTextGet()`

```php
aCustomerCompanyTextGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper43
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
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
    $result = $apiInstance->aCustomerCompanyTextGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper43**](../Model/Wrapper43.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyTextPost()`

```php
aCustomerCompanyTextPost($apibusinesspartnera_customer_company_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerCompanyTextType
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_company_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerCompanyTextTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyTextPost($apibusinesspartnera_customer_company_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCompanyTextApi->aCustomerCompanyTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

# BeLenka\SAP\BusinessPartner\SupplierCompanyTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet()**](SupplierCompanyTextApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Retrieves supplier company text data attached to company data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost()**](SupplierCompanyTextApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Creates supplier company text data. |
| [**aSupplierCompanyTextGet()**](SupplierCompanyTextApi.md#aSupplierCompanyTextGet) | **GET** /A_SupplierCompanyText | Retrieves supplier company text data attached to company data. |
| [**aSupplierCompanyTextPost()**](SupplierCompanyTextApi.md#aSupplierCompanyTextPost) | **POST** /A_SupplierCompanyText | Creates supplier company text data. |
| [**aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete()**](SupplierCompanyTextApi.md#aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_SupplierCompanyText(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes supplier company text data. |
| [**aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet()**](SupplierCompanyTextApi.md#aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_SupplierCompanyText(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Retrieves supplier company text data by using the key fields. |
| [**aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch()**](SupplierCompanyTextApi.md#aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_SupplierCompanyText(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates supplier company text data. |


## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper55
```

Retrieves supplier company text data attached to company data.

Retrieves all the supplier company text data attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper55**](../Model/Wrapper55.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost($supplier, $company_code, $apibusinesspartnera_supplier_company_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType
```

Creates supplier company text data.

Creates text data attached to a supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_supplier_company_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost($supplier, $company_code, $apibusinesspartnera_supplier_company_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_supplier_company_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate**](../Model/APIBUSINESSPARTNERASupplierCompanyTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType**](../Model/ASupplierCompanyTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanyTextGet()`

```php
aSupplierCompanyTextGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper55
```

Retrieves supplier company text data attached to company data.

Retrieves all the supplier company text data attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
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
    $result = $apiInstance->aSupplierCompanyTextGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanyTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper55**](../Model/Wrapper55.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanyTextPost()`

```php
aSupplierCompanyTextPost($apibusinesspartnera_supplier_company_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType
```

Creates supplier company text data.

Creates text data attached to a supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_company_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanyTextPost($apibusinesspartnera_supplier_company_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanyTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_company_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTextTypeCreate**](../Model/APIBUSINESSPARTNERASupplierCompanyTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType**](../Model/ASupplierCompanyTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete($supplier, $company_code, $language, $long_text_id)
```

Deletes supplier company text data.

Deletes text record linked to supplier company by Supplier, CompanyCode, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete($supplier, $company_code, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
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

## `aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet()`

```php
aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet($supplier, $company_code, $language, $long_text_id, $select): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType
```

Retrieves supplier company text data by using the key fields.

Retrieves supplier company text data by using Supplier, CompanyCode, Language and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet($supplier, $company_code, $language, $long_text_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyTextType**](../Model/ASupplierCompanyTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch($supplier, $company_code, $language, $long_text_id, $modified_a_supplier_company_text_type)
```

Updates supplier company text data.

Updates text data linked to supplier company by using Supplier, CompanyCode, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_supplier_company_text_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyTextType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyTextType | New property values

try {
    $apiInstance->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch($supplier, $company_code, $language, $long_text_id, $modified_a_supplier_company_text_type);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyTextApi->aSupplierCompanyTextSupplierSupplierCompanyCodeCompanyCodeLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_supplier_company_text_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyTextType**](../Model/ModifiedASupplierCompanyTextType.md)| New property values | |

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

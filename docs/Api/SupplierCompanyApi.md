# BeLenka\SAP\BusinessPartner\SupplierCompanyApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierCompanyGet()**](SupplierCompanyApi.md#aSupplierCompanyGet) | **GET** /A_SupplierCompany | Retrieves supplier company data. |
| [**aSupplierCompanyPost()**](SupplierCompanyApi.md#aSupplierCompanyPost) | **POST** /A_SupplierCompany | Creates supplier company data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;) | Retrieves supplier company data using key fields. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch) | **PATCH** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;) | Updates supplier company data using key fields. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Retrieves supplier company text data attached to company data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_CompanyText | Creates supplier company text data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierDunning | Retrieves dunning records attached to supplier company data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierDunning | Creates a new dunning records attached to supplier company. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_Supplier | Retrieves supplier general data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierWithHoldingTax | Retrieves supplier withholding tax records. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost()**](SupplierCompanyApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierWithHoldingTax | Creates new supplier witholding tax data. |
| [**aSupplierSupplierToSupplierCompanyGet()**](SupplierCompanyApi.md#aSupplierSupplierToSupplierCompanyGet) | **GET** /A_Supplier(&#39;{Supplier}&#39;)/to_SupplierCompany | Retrieves supplier company data. |
| [**aSupplierSupplierToSupplierCompanyPost()**](SupplierCompanyApi.md#aSupplierSupplierToSupplierCompanyPost) | **POST** /A_Supplier(&#39;{Supplier}&#39;)/to_SupplierCompany | Creates supplier company data. |


## `aSupplierCompanyGet()`

```php
aSupplierCompanyGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper52
```

Retrieves supplier company data.

Retrieves all supplier company data available in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
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
    $result = $apiInstance->aSupplierCompanyGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanyGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper52**](../Model/Wrapper52.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanyPost()`

```php
aSupplierCompanyPost($apibusinesspartnera_supplier_company_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType
```

Creates supplier company data.

Creates supplier company data including Dunning, WithholdingTax, and Text data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_company_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanyPost($apibusinesspartnera_supplier_company_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_company_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate**](../Model/APIBUSINESSPARTNERASupplierCompanyTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType**](../Model/ASupplierCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet($supplier, $company_code, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType
```

Retrieves supplier company data using key fields.

Retrieves supplier company data by using Supplier and CompanyCode fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet($supplier, $company_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType**](../Model/ASupplierCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch($supplier, $company_code, $modified_a_supplier_company_type)
```

Updates supplier company data using key fields.

Updates supplier company data by using Supplier and CompanyCode fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$modified_a_supplier_company_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyType | New property values

try {
    $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch($supplier, $company_code, $modified_a_supplier_company_type);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **modified_a_supplier_company_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierCompanyType**](../Model/ModifiedASupplierCompanyType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
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
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
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
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToCompanyTextPost: ', $e->getMessage(), PHP_EOL;
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

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper56
```

Retrieves dunning records attached to supplier company data.

Retrieves all the dunning records attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
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
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper56**](../Model/Wrapper56.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost($supplier, $company_code, $apibusinesspartnera_supplier_dunning_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType
```

Creates a new dunning records attached to supplier company.

Assigns a new dunning records to a supplier company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_supplier_dunning_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost($supplier, $company_code, $apibusinesspartnera_supplier_dunning_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_supplier_dunning_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate**](../Model/APIBUSINESSPARTNERASupplierDunningTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType**](../Model/ASupplierDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet($supplier, $company_code, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ASupplierType
```

Retrieves supplier general data.

Retrieves general data of all the supplier records available in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet($supplier, $company_code, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierType**](../Model/ASupplierType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper57
```

Retrieves supplier withholding tax records.

Retrieves all withholding tax records attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
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
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper57**](../Model/Wrapper57.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost($supplier, $company_code, $apibusinesspartnera_supplier_with_holding_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierWithHoldingTaxType
```

Creates new supplier witholding tax data.

Creates supplier withholding tax record linked to supplier company data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_supplier_with_holding_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost($supplier, $company_code, $apibusinesspartnera_supplier_with_holding_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_supplier_with_holding_tax_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate**](../Model/APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierWithHoldingTaxType**](../Model/ASupplierWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierSupplierToSupplierCompanyGet()`

```php
aSupplierSupplierToSupplierCompanyGet($supplier, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper52
```

Retrieves supplier company data.

Retrieves all supplier company data available in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSupplierSupplierToSupplierCompanyGet($supplier, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierSupplierToSupplierCompanyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper52**](../Model/Wrapper52.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierSupplierToSupplierCompanyPost()`

```php
aSupplierSupplierToSupplierCompanyPost($supplier, $apibusinesspartnera_supplier_company_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType
```

Creates supplier company data.

Creates supplier company data including Dunning, WithholdingTax, and Text data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$apibusinesspartnera_supplier_company_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierSupplierToSupplierCompanyPost($supplier, $apibusinesspartnera_supplier_company_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierCompanyApi->aSupplierSupplierToSupplierCompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **apibusinesspartnera_supplier_company_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierCompanyTypeCreate**](../Model/APIBUSINESSPARTNERASupplierCompanyTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierCompanyType**](../Model/ASupplierCompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

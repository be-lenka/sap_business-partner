# BeLenka\SAP\BusinessPartner\CompanyWithholdingTaxApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet()**](CompanyWithholdingTaxApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierWithHoldingTax | Retrieves supplier withholding tax records. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost()**](CompanyWithholdingTaxApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierWithHoldingTax | Creates new supplier witholding tax data. |
| [**aSupplierWithHoldingTaxGet()**](CompanyWithholdingTaxApi.md#aSupplierWithHoldingTaxGet) | **GET** /A_SupplierWithHoldingTax | Retrieves supplier withholding tax records. |
| [**aSupplierWithHoldingTaxPost()**](CompanyWithholdingTaxApi.md#aSupplierWithHoldingTaxPost) | **POST** /A_SupplierWithHoldingTax | Creates new supplier witholding tax data. |
| [**aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete()**](CompanyWithholdingTaxApi.md#aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete) | **DELETE** /A_SupplierWithHoldingTax(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Deletes supplier withholding tax data. |
| [**aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet()**](CompanyWithholdingTaxApi.md#aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet) | **GET** /A_SupplierWithHoldingTax(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Retrieves supplier withholding tax records by key fields. |
| [**aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch()**](CompanyWithholdingTaxApi.md#aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch) | **PATCH** /A_SupplierWithHoldingTax(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Updates supplier company withholding tax records using key fields. |


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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
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
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
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
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
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

## `aSupplierWithHoldingTaxGet()`

```php
aSupplierWithHoldingTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper57
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
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
    $result = $apiInstance->aSupplierWithHoldingTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper57**](../Model/Wrapper57.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierWithHoldingTaxPost()`

```php
aSupplierWithHoldingTaxPost($apibusinesspartnera_supplier_with_holding_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierWithHoldingTaxType
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_with_holding_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierWithHoldingTaxTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierWithHoldingTaxPost($apibusinesspartnera_supplier_with_holding_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete()`

```php
aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete($supplier, $company_code, $withholding_tax_type)
```

Deletes supplier withholding tax data.

Deletes supplier withholding tax data linked to supplier company by using Supplier, CompanyCode, and WithholdingTaxType fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type

try {
    $apiInstance->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete($supplier, $company_code, $withholding_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |

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

## `aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet()`

```php
aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet($supplier, $company_code, $withholding_tax_type, $select): \BeLenka\SAP\BusinessPartner\Model\ASupplierWithHoldingTaxType
```

Retrieves supplier withholding tax records by key fields.

Retrieves supplier withholding tax records by Supplier, CompanyCode, and WithholdingTaxType fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet($supplier, $company_code, $withholding_tax_type, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierWithHoldingTaxType**](../Model/ASupplierWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch()`

```php
aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch($supplier, $company_code, $withholding_tax_type, $modified_a_supplier_with_holding_tax_type)
```

Updates supplier company withholding tax records using key fields.

Updates supplier withholding tax data linked to supplier company by using Supplier, CompanyCode, and WithholdingTaxType fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CompanyWithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type
$modified_a_supplier_with_holding_tax_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierWithHoldingTaxType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierWithHoldingTaxType | New property values

try {
    $apiInstance->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch($supplier, $company_code, $withholding_tax_type, $modified_a_supplier_with_holding_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling CompanyWithholdingTaxApi->aSupplierWithHoldingTaxSupplierSupplierCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |
| **modified_a_supplier_with_holding_tax_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierWithHoldingTaxType**](../Model/ModifiedASupplierWithHoldingTaxType.md)| New property values | |

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
